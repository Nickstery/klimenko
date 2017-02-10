{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}

    <h2>Participants</h2>
<a href="/registration"><button class="btn btn-success" style="margin-bottom: 12px"> Register </button></a>
    <table class="table table-striped table-bordered">
        <thead>
            <th>Name</th>
            <th>Last Name</th>
            <th>Affiliation</th>
            <th>City</th>
            <th>Country</th>
            <th>Title of the Talk</th>
        </thead>
        <tbody>
        {foreach $users as $user}
        <tr>
            <td>{$user['name']}</td>
            <td>{$user['last_name']}</td>
            <td>{$user['affiliation']}</td>
            <td>{$user['city']}</td>
            <td>{$user['country']}</td>
            <td>{$user['title_of_talk']}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>

{/block}
