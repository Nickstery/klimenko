<?php

/**
 * Class MainController
 * Resolves all requests from user's route [http://localhost/{route}/action/....]
 * Runs the {route}() method
 */
class MainController
{

    /** @var $smarty Smarty */
    private $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    /**
     * Shows the participants page
     */
    public function participants()
    {
        $users = [];
        if(file_exists('../storage/audience/registered/list.json')) {
            $users = json_decode(file_get_contents('../storage/audience/registered/list.json'), true);
        }
        $this->smarty->assign('users', $users);
        $this->showHTML();
    }

    /**
     * Shows the announcements page
     */
    public function announcements()
    {
        $this->showHTML();
    }

    /**
     * Shows the program page
     */
    public function program()
    {
        $this->showHTML();
    }

    /**
     * Shows the abstracts page
     */
    public function abstracts()
    {
        $this->showHTML();
    }

    /**
     * Shows the contacts page
     */
    public function contacts()
    {
        $this->showHTML();
    }

    /**
     * Shows the photos page
     */
    public function photos()
    {
        $data = array_slice(scandir('images'), 2); //remove "." and ".." files
        $this->smarty->assign('photos', $data);
        $this->showHTML();
    }

    /**
     * Shows the registration page
     */
    public function registration()
    {
        $this->showHTML();
    }

    public function register()
    {

        if(empty($_POST['name']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || $this->isUserExists(empty($_POST['email']))) {
            $this->smarty->assign('message', 'ERROR. Empty data or user exists');
            $this->showHTML();
            return;
        }

        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $homepage = $_POST['homepage']; # TODO: check if exists
        $affiliation = $_POST['affiliation'];
        $affiliation_home = $_POST['affiliation_home'];
        $status = $_POST['status'];
        $talk = $_POST['talk'];
        $title_of_talk = $_POST['title_of_talk']; # TODO: check if exists
        $date_arrival = $_POST['date_arrival'];
        $date_departure = $_POST['date_departure'];
        $dinner = $_POST['dinner'];
        $accom = $_POST['accom'];
        
        $hash = md5($name.$email.time());

        $users = [
            'email' => $email,
            'name' => $name,
            'last_name' => $last_name,
            'city' => $city,
            'country' => $country,
            'homepage' => $homepage,
            'affiliation' => $affiliation,
            'affiliation_home' => $affiliation_home,
            'status' => $status,
            'talk' => $talk,
            'title_of_talk' => $title_of_talk,
            'date_arrival' => $date_arrival,
            'date_departure' => $date_departure,
            'dinner' => $dinner,
            'accom' => $accom,
            'hash' => $hash
        ];

        if(!file_exists('../storage/audience/moderation/list.json')) {
            file_put_contents('../storage/audience/moderation/list.json', json_encode([]));
        }
        $users_to_be_moderated = json_decode(file_get_contents('../storage/audience/moderation/list.json'), true);
        $users_to_be_moderated[] = $users;

        file_put_contents('../storage/audience/moderation/list.json', json_encode($users_to_be_moderated));

        $to = 'ihorklim93@gmail.com';
        $subject = 'User to be approved';

        $generated_link = 'http://35.162.114.150/apply?email='.$email."&hash=".$hash;

        mail($to, $subject, json_encode($users)." LINK: $generated_link");

        $this->smarty->assign('message', 'Waiting for moderation');
        $this->showHTML();
    }

    /**
     * Shows 404 page if request is invalid
     */
    public function not_found()
    {
        $this->showHTML();
        return;
    }

    public function pdf()
    {
        header("Content-Type: application/pdf");
        readfile('../storage/attachments/announcement.pdf');
    }

    public function image($file)
    {
        readfile('../public/images/'.$file);
    }

    public function apply()
    {
        $hash = $_GET['hash'];
        $email = $_GET['email'];
        if(!file_exists('../storage/audience/moderation/list.json')) {
            die('Nothing to moderate');
        }

        $users = json_decode(file_get_contents('../storage/audience/moderation/list.json'), true);

        $i = null;
        $name = null;
        foreach($users as $index => $user) {
            if($email == $user['email'] && $user['hash'] == $hash) {
                $i = $index;
                $name = $user['name'];
                break;
            }
        }
        if($i === null) {
            die("Invalid hash or user_id");
        }

        unset($users[$i]);

        file_put_contents('../storage/audience/moderation/list.json', json_encode($users));

        $list = json_decode(file_get_contents('../storage/audience/registered/list.json'), true);
        $list[] = ['name' => $name, 'email' => $email, 'created_at' => date('d-m-Y H:i:s', time())];
        file_put_contents('../storage/audience/registered/list.json', json_encode($list));

        $this->showHTML();
    }

    /**
     * Builds template filename from called method name
     * if method name is "info", method will try to load /views/info.tpl
     * file.
     */
    private function showHTML()
    {
        $template_name = debug_backtrace()[1]['function'].".tpl";
        $this->smarty->display($template_name);
    }

    private function isUserExists($email) {
        $reg = json_decode(file_get_contents('../storage/audience/registered/list.json'), true);
        $mod = json_decode(file_get_contents('../storage/audience/moderation/list.json'), true);
        $res = array_merge($reg, $mod);
        foreach($res as $user) {
            if($user['email'] == $email) {
                return true;
            }
        }
        return false;
    }
}
