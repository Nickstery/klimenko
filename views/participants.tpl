{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}

    <h2>Participants</h2>
<a href="/registration"><button class="btn btn-success" style="margin-bottom: 12px"> Register </button></a>
    <table class="table table-striped table-bordered">
        <thead>
            <th>User name</th>
            <th>Email</th>
            <th>Register date</th>
        </thead>
        <tbody>
        {foreach $users as $user}
        <tr>
            <td>{$user['name']}</td>
            <td>{$user['email']}</td>
            <td>{$user['created_at']}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>

{/block}
