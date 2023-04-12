<div>
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card">
                        <h5 style="font-family:Arial; font-size:150%; text-align:center;"></h5>
                        {{-- <h5 class="text-center text-light">Filter Your Choice</h5> --}}
                        <div class="form-group ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                            <input type="text" placeholder="search" class="form-control" wire:model.lazy="search"
                                autocomplete>
                        </div>
                        <div class="form-group mb-5 text-light">
                            <label for="genre">Select Genre</label>
                            <br>
                            <input type="checkbox" wire:model="checkGenre" value="Rock">Rock<br>
                            <input type="checkbox" wire:model="checkGenre" value="Pop">Pop<br>
                            <input type="checkbox" wire:model="checkGenre" value="Hip Hop"> Reggae<br>
                            <input type="checkbox" wire:model="checkGenre" value="R&B"> R&B<br>
                            <input type="checkbox" wire:model="checkGenre" value="Reggae"> Reggae<br>
                            <input type="checkbox" wire:model="checkGenre" value="Acoustic"> Acoustic<br>
                            <input type="checkbox" wire:model="checkGenre" value="Jazz"> Jazz<br>
                            <input type="checkbox" wire:model="checkGenre" value="Blues"> Blues<br>
                            <input type="checkbox" wire:model="checkGenre" value="Classical"> Classical<br>
                        </div>
                        <div class="form-group mb-5 text-light">
                            <label for="location">Select Location:</label>
                            <select class="form-select" wire:model="selectLocation">
                                <option value="All">All</option>
                                <option value="Korea">Korea</option>
                                <option value="New York">New York</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Japan">Japan</option>
                                <option value="Canada">Canada</option>
                                <option value="San Francisco">San Francisco</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="London">London</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Portland">Portland</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Las Vegas">Las Vegas</option>
                                <option value="Collombia">Colombia</option>
                                <option value="Philippines">Philippines</option>
                            </select>
                        </div>

                        <div class="form-group mb-3 text-white">
                        <label for="rating">Rating(s)</label>
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="1">
                        @for ($i = 0; $i < 1; $i++)
                            <i class="fa fa-smile-o" style="color: orange"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="2">
                        @for ($i = 0; $i < 2; $i++)
                            <i class="fa fa-smile-o" style="color: orange"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="3">
                        @for ($i = 0; $i < 3; $i++)
                            <i class="fa fa-smile-o" style="color: orange"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="4">
                        @for ($i = 0; $i < 4; $i++)
                            <i class="fa fa-smile-o" style="color: orange"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="5">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa fa-smile-o" style="color: orange"></i>
                        @endfor
                        <br>
                    </div>


                        <div class="form-group mb-5 text-light">
                            <label for="sort">Sort By:</label>
                            <select wire:model="sort" class="form-select" id="sort">
                                <option value="low_to_high">Price: Low to High</option>
                                <option value="high_to_low">Price: High to Low</option>
                            </select>
                        </div>

                        <button class="btn btn-success form-control"
                            wire:click="resetFilters()"><i class="fa fa-refresh" aria-hidden="true"></i></button>

                    </div>
                </div>
            </div>
        </div>
        <div class="col md-8">
            <h3 class="text-warning text-center">Music is a melody of your Soul<br></h3>
            <h3 class="text-warning text-center">Find the perfect melody for you</h3>
            <p class="text-warning text-center">Right Here, right now</p>
            @include('livewire.delete')
            @include('livewire.create')
            @include('livewire.edit')
            @include('livewire.view')
            <hr>
            {{-- <h6 class="text-light">Table count: <span class="badge badge-info">{{ $musicCount }}</span></h6>
            @if (session('message'))
                <div class="alert bg-success text-light text-scenter">
                    <h6>{{ session('message') }}</h6>
                </div>
            @endif --}}
            <a href="" class="btn btn-dark d-flex justify-content-end float-end mb-5" data-toggle="modal"
                data-target="#addMusic"><i class="	fa fa-user-plus" aria-hidden="true"></i></a>
            <table class="table table-striped table-hover">
                <thead class="bg-dark">
                    <tr>
                        <th class="text-light">
                            ID.
                        </th>
                        <th class="text-light">
                            Image
                        </th>
                        <th class="text-light">
                            Music Title
                        </th>
                        <th class="text-light">
                            Music Band
                        </th>
                        <th class="text-light">
                            Location
                        </th>
                        <th class="text-light">
                            Album Price
                        </th>
                        <th class="text-light">
                            Genre
                        </th>
                        <th class="text-light">
                            Rating(s)
                        </th>
                        <th class="text-light">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($musicPlaylists as $music)
                        <tr>
                            <td class="text-light">
                                {{ $music->id }}
                            </td>
                            <td>
                                <img src="{{ Storage::url($music->image) }}"
                                    style="height: 80px; width: 80px; border-radius: 50%;" alt="{{ $music->title }}">
                            </td>
                            <td class="text-light">
                                {{ $music->title }}
                            </td>
                            <td class="text-light">
                                {{ $music->author }}
                            </td>
                            <td class="text-light">
                                {{ $music->location }}
                            </td>
                            <td class="text-light">
                                {{ number_format($music->price, 2) }}
                            </td>
                            <td class="text-light">
                                {{ $music->genre }}
                            </td>
                            <td class="text-light">
                                @for ($i = 0; $i < $music->rating; $i++)
                                    <i class="fa fa-smile-o" style="color: orange; font-size: 9px;"></i>
                                @endfor
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning" data-toggle="modal"
                                    data-target="#viewMusic" wire:click="view({{ $music->id }})"><i
                                        class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-sm btn-info" data-toggle="modal"
                                    data-target="#updateMusic" wire:click="edit({{ $music->id }})"><i
                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                                    data-target="#deleteMusic" wire:click="delete({{ $music->id }})"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    @if ($musicPlaylists->count() === 0)
                        <td colspan="9" class="text-center text-light">No data found</td>
                    @endif
                </tbody>
            </table>
             @if (count($musicPlaylists))
                {{ $musicPlaylists->links('livewire-pagination-links')}}
             @endif
        </div>
    </div>
</div>
</div>

<style>
.card {
        background-image:url('https://thumbs.gfycat.com/YellowishAgitatedGavial.webp');
        transition: 0.2s;
        border-radius: 8vh;
        background-repeat: no-repeat;
        background-position: top center;
        background-size: 100%;
        background-position-y: 40%;
        background-attachment: fixed;
        /* 5px rounded corners */
    }

    /* Add rounded corners to the top left and the top right corner of the image */
    /* .card {

        position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
    } */
    .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

    .table {
        font-family: Arial, Helvetica, sans-serif;
        background-image:url('https://thumbs.gfycat.com/YellowishAgitatedGavial.webp');
     transition: 0.2s;
        border-radius: 5vh;
        background-repeat: no-repeat;
        background-position: top center;
        background-size: 100%;
        background-position-y: 40%;
        background-attachment: fixed;
    }
    tr:nth-child(even) {
     min-width: 0;
     word-wrap: break-word;
     background-color: #443923;
     background-clip: border-box;
     border: 1px solid #131367;
     border-radius: 8;
}
    /* Add rounded corners to the top left and the top right corner of the image */
    /* .table {
        border-radius: 5px 5px 0 0;
    }
    body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 0.875rem;
    font-weight: 500;
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f;
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem;
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table, .jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    font-size: .875rem;
    text-transform: uppercase;
}

.table td, .jsgrid .jsgrid-table td {
    font-size: 0.875rem;
    padding: .875rem 0.9375rem;
} */


</style>

