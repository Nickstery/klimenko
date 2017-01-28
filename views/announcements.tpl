{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}
    <h2>Announcements</h2>
    <div>
        <object data="http://localhost/pdf" type="application/pdf" style="width: 100%;height: 100%">
            <a href="http://localhost/pdf">test.pdf</a>
        </object>
    </div>
{/block}