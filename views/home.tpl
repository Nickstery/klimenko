{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}

    <h2>Home</h2>
<a href="/registration"><button class="btn btn-success" style="margin-bottom: 12px"> Register </button></a>
    <table class="table table-striped table-bordered">
        <thead>
            <th>User name</th>
            <th>Register date</th>
        </thead>
        <tbody>
        <tr>
            <td>Test name</td>
            <td>11/11/2011</td>
        </tr>
        <tr>
            <td>Test name</td>
            <td>11/11/2011</td>
        </tr>
        <tr>
            <td>Test name</td>
            <td>11/11/2011</td>
        </tr>
        </tbody>
    </table>

{/block}