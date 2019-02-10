<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <title>Create project</title>
</head>
<body>
    <form class="container" method="POST" action="/projects" style="padding-top: 40px">
        @csrf
        <h1 class="heading is-1">Create Project</h1>
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text"
                       name="title"
                       placeholder="Title"
                       class="input">
            </div>

            <label class="label" for="description">Description</label>
            <div class="control">
                <input type="text"
                       name="description"
                       placeholder="Description"
                       class="input">
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit"
                            class="button is-link">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
