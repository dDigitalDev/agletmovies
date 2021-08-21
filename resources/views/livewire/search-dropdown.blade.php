<div>
    <form class="form-inline my-2 my-lg-0">
        <input wire:model.debounce.300ms="search" class="form-control mr-sm-2" type="text" placeholder="Search"   aria-label="Search">
    </form>
    <div class="droplist position-absolute" >
        @foreach ($searchResults as $results)
        <ul class="list-group p-3 mb-2 bg-warning text-dark">
            <li class="list-group-item list-group-item-primary">{{$results['title']}}</li>
          </ul>
        @endforeach
    </div>

</div>
