{extends file="index.tpl"}
{block name=content}

<div>
    <div class="row align-items-center">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form action="" method="post">
                <div class="form-group">
                    <br>
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>

                {if $mode == 'register'}
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Password">
                </div>

                {/if}
                <div class="form-check">
                    <input name="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Keep me log in</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
{/block}