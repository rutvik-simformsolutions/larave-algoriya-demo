<div class="col-md-10  ">
    @forelse ($records as $record)
        @foreach ($record as $singlerecord)
            <div class="list-group">
                <h3>{{ $singlerecord['type'] }}</h3>
                <div class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <div>
                                {{-- <div class="float-right">2021-04-20 04:04pm</div> --}}
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                                    massa.
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                    mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
         @endforeach
    @empty
        <span>No Dat Found ...</span>
    @endforelse
</div>
