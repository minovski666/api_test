<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading mb-4"><h1>List of Restaurants</h1></div>
                <hr>
                <div class="panel-body">
                    @foreach($data->businesses as $restaurant)
                        <article>
                            <div class="body">
                                <p><b>ID:</b> {{$restaurant->id}}</p>
                                <p><b>Name:</b> {{$restaurant->name}}</p>
                                <p><b>Alias:</b> {{$restaurant->alias}}</p>
                            </div>
                        </article>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
