@props(['name' => '', 'description' => ''])

<div class="card">
    <div class="card-head"></div>
    <div class="card-body">
        <p>{{$name}}</p>
        <div class="alert alert-primary">
            <p>{{$description}}</p>
        </div>
    </div>
</div>