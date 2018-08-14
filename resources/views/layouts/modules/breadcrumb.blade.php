<div class="breadcrumb">
    <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
    @foreach($breadcrumb as $key => $br)
    <a href="{{$br['link']}}" class="breadcrumb-item {{(count($breadcrumb) - 1) == $key ? 'active' : ''}}">{{$br['title']}}</a>
    @endforeach
</div>