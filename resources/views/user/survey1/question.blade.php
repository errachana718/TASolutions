
@extends('user.survey1.layout.index')

@section('content')
<!--  Banner Section Starts  -->
    <div class="home-banner-wrapper" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <div class="home-banner-content">
                        <h2 class="title banner-title Rhode-Medium text-white">
                           What is Survey? 
                        </h2>
                        <p class="text banner-text text-white">
                            A survey is a method of gathering information from a sample of people, traditionally with the intention of generalising the results to a larger population.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="form-wrapper mb-4 survey_ques1">
                        <h2>Please Select The Survey</h2>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="business-mobiles" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div>
                                    
                                    <form  class="form-horizontal question isCurrent" id="survey1" data-index-number="1">
                                        <div class="form-group row">
                                            <label for="" class="col-md-2 control-label">Survey</label>
                                            <div class="col-md-10">
                                                <select name="sid" class="form-control" id="sid">
                                                    <option>Select</option>
                                                    @if($survey)
                                                      @foreach($survey as $key=>$val)
                                                        <option value="{{$key}}">{{$val}}</option>
                                                      @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                         <button type="submit" class="btn nextBBtn float-right">NEXT</button>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="form-wrapper mb-4 survey_questions hide" >
                        <h2>Get Questions</h2>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="business-mobiles" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" id="enrollmentProgress" role="progressbar"
                                            style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <span id="enrollmentProgressValue"></span>
                                        </div>
                                    </div>
                                    <form  class="form-horizontal question isCurrent" id="servey2" data-index-number="2">
                                       {{ csrf_field() }}
                                       
                                        
                                         <button type="submit" class="btn nextBBtn float-right">NEXT</button>
                                    </form>
                                   
                                    <div id="submit_message">
                                        <span class="question-wrapper">Great, your survey are on the way to the survey list provided. If we need
                                            any more info one of our team will be in touch.</span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection