@extends('user.survey1.layout.index')

@section('content')
<!--  Product Section Starts  -->
    <section class="product-wrapper section-padding" style="margin-top:40px" id="products">
        <h2 class="title text-center Rhode-Medium">List Survey Question Answers</h2>
        <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Survey</th>
                  <th>Question</th>
                  <th>Answer</th>
                </tr>
              </thead>
              <tbody>
                @if(count($answers) > 0)
                 @foreach($answers as $key=>$val)
                  <tr>
                  <td>{{$val->id}}</td>
                  <td>{{$val->description}}</td>
                  <td>{{$val->title}}</td>
                  <td>{{$val->answer}}</td>
                </tr>
                 @endforeach
                 @else
                 <p>There is no data</p>
                @endif
              </tbody>
              <tfooter>
               {!! $answers->links() !!}
              </tfooter>
            </table>
        </div>
    </section>
    <!--  Product Section Ends  -->
@endsection