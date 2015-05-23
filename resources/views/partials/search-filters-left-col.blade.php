<div class="search-filters-left-col-container">
    <dl class="common">
        <dt class="commondt">AIRPORTS</dt>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} KCMA: Camarillo</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} KVNY: Van Nuys</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} KSZP: Santa Paula</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} KSMO: Santa Monica</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} KBER: Austin-Bergstrom</label></div></dd>
        <dd class="bluedd-title">+ Show more airports</dd>
    </dl>

    <dl class="common">
        <dt class="commondt">ATTRACTIONS</dt>
        <dd class="bluedd-item">Food</dd>
        <dd class="bluedd-item">Accomodation</dd>
        <dd class="bluedd-item">Activity</dd>
    </dl>

    <dl class="common">
        <dt class="commondt">DISTANCE FROM AIRPORT</dt>
        <div class="form-group">
            {!! Form::text('distance_from_airport', null, ['class' => 'form-control', 'id' => 'distance_from_airport']) !!}
        </div>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_distance_from_airport') !!} On-Field Listings Only</label></div></dd>
    </dl>

    <dl class="common">
        <dt class="commondt">MINIMUM RUNWAY LENGTH</dt>
        <div class="form-group">
            {!! Form::text('min_runway_length', null, ['class' => 'form-control', 'id' => 'min_runway_length']) !!}
        </div>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_distance_from_airport') !!} On-Field Listings Only</label></div></dd>
    </dl>

    <dl class="common">
        <dt class="commondt">RUNWAY SURFACE</dt>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Paved</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Grass</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Dirt</label></div></dd>
    </dl>

    <dl class="common">
        <dt class="commondt">FBO FEATURES</dt>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Controlled</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Uncontrolled</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Instrument Approaches</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Nighttime Operations</label></div></dd>
        <dd class="commondd"><div class="form-group"><label>{!! Form::checkbox('search_left_airports') !!} Restaurant on Field</label></div></dd>
        <dd class="bluedd-title">+ Show more features</dd>
    </dl>
</div>