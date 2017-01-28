{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body} <h2>Photos</h2>
        <div class="row">
            {foreach $photos as $photo}
            <div class="col-xs-6 col-md-4" style="cursor: pointer" data-toggle="modal" data-target="#{array_shift(explode(".",$photo))}">
                <div class="thumbnail">
                    <img src="image/{$photo}" alt="...">
                <div class="caption">
                    <h4>{array_shift(explode(".",$photo))}</h4>
                </div>
                </div>
            </div>

                <!-- Modal -->
                <div class="modal fade" id="{array_shift(explode(".",$photo))}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border: 0">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">{array_shift(explode(".",$photo))}</h4>
                            </div>
                                <img src="image/{$photo}" alt="..." class="modal-dialog" style="margin: 0">
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
{/block}