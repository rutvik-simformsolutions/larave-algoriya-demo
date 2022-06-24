<div class="col-md-10  ">
    @forelse ($records as $record)
        @foreach ($record as $singlerecord)
            <div class="list-group">
                <h3>{{ $singlerecord['type'] }}</h3>
                <div class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <div>
                                <p class="mb-0">Name : {!! $singlerecord['metadata'][$singlerecord['type'].'name']['value'] !!}</p>
                                @if($singlerecord['type'] == 'skill')
                                <p class="mb-0">{!! $singlerecord['metadata']['description']['value'] !!}</p>
                                @endif
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
