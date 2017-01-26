{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="/register" method="POST">
                    <div class="form-group"><h2>Registration</h2></div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>

{/block}