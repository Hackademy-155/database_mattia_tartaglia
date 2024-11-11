<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Prodotto da inserire</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <form method="POST" action="{{route('prod.store')}}">
                    @csrf 
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="" id="description" class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Prezzo</label>
                        <input type="float" class="form-control" id="price" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>