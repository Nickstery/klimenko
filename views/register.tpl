{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}
    {$message|default:"Wait for moderation plz"}
{/block}