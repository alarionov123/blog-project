{extends file="index.tpl"}
{block name=content}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Writer Account</title>
    </head>
    <body>
    <header>
        <h1>Writer Account</h1>
    </header>

    <div class="container-profile">

        {if $mode === 'view'}
        <div class="profile-info">
            <h2>{$user_data.firstname} {$user_data.lastname}</h2>
            <p>Email: {$user_data.email}</p>
            <div class="buttons-container">
                <a href="profile?mode=logout">Log out</a>
                <a href="profile?mode=edit">Edit profile</a>
            </div>
        </div>
        {elseif $mode === 'edit'}
        <form action="" method="post">
            <div class="form-group">
                {if $error} {$error} {/if}
                <br>
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                       value="{$user_data.email}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" value="            ">
            </div>
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input name="firstname" type="text" class="form-control" id="firstname" value="{$user_data.firstname}">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input name="lastname" type="text" class="form-control" id="lastname" value="{$user_data.lastname}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {elseif $mode == 'add_blog_article'}
    <div class="container-profile">
        <form>
            <div class="form-group">
                <label for="blog_title">Blog's title</label>
                <input type="text" class="form-control" id="blog_title" placeholder="Put title in">
            </div>
            <div class="form-group">
                <label for="blog_content">Content</label>
                <textarea class="form-control" id="blog_content" rows="15"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {/if}
    </body>
{/block}