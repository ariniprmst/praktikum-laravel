<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ url('/basic_routing') }}" class="list-group-item listgroupitem-action">
                Basic Routing (No View, No Controller)</a>
            <a href="{{ url('/view_route') }}" class="list-group-item list-groupitemaction">View
                Route</a>
            <a href="{{ url('/controller_route') }}" class="list-group-item
listgroup-item-action">
                Controller Route
            </a>
            <a href="{{ url('/') }}" class="list-group-item list-group-itemaction">
                Redirect Route
            </a>
            <a href="{{ url('/user/12345') }}" class="list-group-item listgroupitem-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item
listgroup-item-action">
                Route Parameter (Required Parameter) - 2
            </a>
            <a href="{{ url('/username') }}" class="list-group-item list-groupitemaction">
                Route Parameter (Optional Parameter)
            </a>
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item
list-group-item-action">
                Route With Regular Expression Constraints
            </a>
            <a href="{{ route('profile', ['profileId' => '123']) }}" class="listgroup-item list-group-item-action">
                Named Route
            </a>

            <a href="{{ url('/route_priority/user') }}" class="list-group-item
listgroup-item-action">
                Route Priority
            </a>
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-groupitemaction">
                Fallback Routes
            </a>
            <h6 class="mt-4">Route Groups (Route Prefixes & Route Name
                Prefixes)</h6>
            <div class="list-group list-group-numbered mt-4">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item
listgroup-item-action">
                    Admin Dashboard
                </a>
                <a href="{{ route('admin.users') }}" class="list-group-item
listgroup-item-action">
                    Admin Users
                </a>
                <a href="{{ route('admin.items') }}" class="list-group-item
listgroup-item-action">
                    Admin Items
                </a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>