{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body} <h2>Photos</h2>
        <div class="row">
            {foreach $photos as $photo}
            <div class="col-xs-6 col-md-4" style="cursor: pointer">
                <div class="thumbnail">
                    <img src="image/{$photo}" alt="...">
                <div class="caption">
                    <h4>Thumbnail label</h4>
                </div>
                </div>
            </div>
            {/foreach}
        </div>
{/block}