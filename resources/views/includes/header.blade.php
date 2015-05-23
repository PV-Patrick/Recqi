<div class="row top-bar">
    <div class="col-sm-6 vcenter">
        <div class="vcenter-this"><img src="/assets/img/recqiLogo_116x31.png" class="img-responsive"></div>
    </div>
    <div class="col-sm-6 vcenter">
       <div class="vcenter-this">
           <div class="pull-right">
               <table class="top-user-info">
                   <tr>
                       <td><div class="user-avatar"></div></td>
                       <td class="col-name">John Smith</td>
                       <td class="col-profile-arrow"><img src="/assets/img/icons/profileArrow.png"> </td>
                   </tr>
               </table>
           </div>
       </div>
    </div>
</div>

<div class="row search-grey-container">

    <div class="search-box-conatiner">
        <div>
            <div class="give-start-text">GIVE YOUR JOURNEYS A <span class="flying">flying</span> START</div>
        </div>
        <div>
            <ul id="main-nav">
                <li class="plan"><a href="#"></a></li>
                <li class="care active"><a href="#"></a></li>
                <li class="rent"><a href="#"></a></li>
                <li class="train"><a href="#"></a></li>
                <li class="join"><a href="#"></a></li>
                <li class="services"><a href="#"></a></li>
            </ul>
        </div>
        <div class="search-container-middle">
            <div class="search-container-top">
                <div class="col-md-3">
                    <div class="search-orange-text">1. Departure Airport</div>
                    <div class="form-group">
                        {!! Form::text('search_depart', null, ['class' => 'form-control', 'placeholder' => 'enter airport id, name or city']) !!}
                    </div>
                    <div class="form-group">
                        <label>{!! Form::checkbox('search_homeairport') !!} <span style="font-family: FuturaBT-Book;">My home airport</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search-orange-text">2. Travel Radius</div>
                    <div class="form-group">
                        {!! Form::text('travel_radius', null, ['class' => 'form-control', 'id' => 'travel_radius']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search-orange-text">3. Discover</div>
                    <div class="search-recqi-btn"></div>
                    <div class="form-group">
                        <label>{!! Form::checkbox('search_include_unattended') !!} <span style="font-family: FuturaBT-Book;">Include unattended airports</span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="background-color:#f5f5f5; padding:25px 50px;">
    <div class="row">
        <div class="search-top-title clearfix">Discover Destinations 250 - 300 NM from KCMA <div class="pull-right"><span class="sortby">Sort by</span> <span class="rating">Rating</span> <span class="rating">Distance</span> <span class="rating">Price</span></div></div>
    </div>
    <div class="row">
        <div class="col-lg-3" style="padding-left:0px;padding-right:30px;">
            @include('partials.search-filters-left-col')
        </div>
        <div class="col-lg-9" style="padding-left:0px;padding-right:0px;">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-4">@include('partials.card')</div>
                <div class="col-lg-4">@include('partials.card')</div>
                <div class="col-lg-4">@include('partials.card')</div>
            </div>
            <div class="row">
                <div class="col-lg-4">@include('partials.card')</div>
                <div class="col-lg-4">@include('partials.card')</div>
                <div class="col-lg-4">@include('partials.card')</div>
            </div>
        </div>
    </div>
</div>