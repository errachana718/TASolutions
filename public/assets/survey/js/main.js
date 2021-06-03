$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 150) {
      $("#main-header").addClass("scroll-menu");
      $(".navbar-brand").removeClass("text-white");
    } else {
      $("#main-header").removeClass("scroll-menu");
      $(".navbar-brand").addClass("text-white");
    }
  });
  $("#end_message").hide();
});

// Next-Button Function

$(".nextBtn").click(function () {
  var currentID = $(this).closest(".question").attr("data-index-number");
  getIndex = parseInt(currentID);
  var enrollmentProgressStatus;
  var currentProgressStatus;

  // check option selected or not
  // var checked = null;
  // if ($('#user-one').is(':checked') || $('#user-two').is(':checked') || $('#user-three').is(':checked') || $('#user-four').is(':checked') || $('#user-five').is(':checked') || $('#user-six').is(':checked')) {
  //   checked = 1;
  // } else {
  //   checked = 0;
  // }
  // if(!checked){
  //   $('.loginError').show();
  //   return null;
  // }
  var form = $("#question" + getIndex + ".isCurrent");
  // console.log("#question" + getIndex + ".isCurrent");
  form.validate({
    rules: {
      users: {
        required: true,
      },
      preferences: {
        required: true,
      },
      system: {
        required: true,
      },
      remote: {
        required: true,
      },
      color: {
        required: true,
      },
      look: {
        required: true,
      },
      office: {
        required: true,
      },
      level: {
        required: true,
      },
      how: {
        required: true,
      },
      outlets: {
        required: true,
      },
      type: {
        required: true,
      },
      cable: {
        required: true,
      },
      contactName: {
        required: true,
      },
    },
  });
  if (form.valid() == true) {
    if ($("#business-mobiles").hasClass("active")) {
      if (getIndex >= 1 && getIndex < 6) {
        $(".question").removeClass("isCurrent");
        var nextID = getIndex + 1;
        $("#business-mobiles #question" + nextID).addClass("isCurrent");
        $("html,body").animate(
          {
            scrollTop: $("body").offset().top,
          },
          "slow"
        );
      }
      if (getIndex > 0 && getIndex < 6) {
        var currentWidth = getIndex * 20 + "%";
        $('#enrollmentProgressValue').text(currentWidth)
        $("#enrollmentProgress").css({ width: currentWidth });
      }
    } else if ($("#businessVoIP").hasClass("active")) {
      if (getIndex >= 1 && getIndex < 7) {
        $(".question").removeClass("isCurrent");
        var nextID = getIndex + 1;
        console.log(nextID);
        $("#businessVoIP #question" + nextID).addClass("isCurrent");
        $("html,body").animate(
          {
            scrollTop: $("body").offset().top,
          },
          "slow"
        );
      }
      if (getIndex > 0 && getIndex < 7) {
        var currentWidth = getIndex * 20 + "%";
        $('#businessVoipValue').text(currentWidth)
        $("#enrollProgress").css({ width: currentWidth });
      }
    } else if ($("#managedPrints").hasClass("active")) {
      if (getIndex >= 1 && getIndex < 5) {
        $(".question").removeClass("isCurrent");
        var nextID = getIndex + 1;
        console.log(nextID);
        $("#managedPrints #question" + nextID).addClass("isCurrent");
        $("html,body").animate(
          {
            scrollTop: $("body").offset().top,
          },
          "slow"
        );
      }
      if (getIndex > 0 && getIndex < 5) {
        var currentWidth = getIndex * 25 + "%";
        $('#managedPrintsValue').text(currentWidth)
        $("#enroll-Progress").css({ width: currentWidth });
      }
    } else if ($("#cloudSolutions").hasClass("active")) {
      if (getIndex >= 1 && getIndex < 5) {
        $(".question").removeClass("isCurrent");
        var nextID = getIndex + 1;
        console.log(nextID);
        $("#cloudSolutions #question" + nextID).addClass("isCurrent");
        $("html,body").animate(
          {
            scrollTop: $("body").offset().top,
          },
          "slow"
        );
      }
      if (getIndex > 0 && getIndex < 5) {
        var currentWidth = getIndex * 25 + "%";
        $('#cloudSolutionValue').text(currentWidth)
        $("#progressSection").css({ width: currentWidth });
      }
    } else if ($("#itSupport").hasClass("active")) {
      if (getIndex >= 1 && getIndex < 5) {
        $(".question").removeClass("isCurrent");
        var nextID = getIndex + 1;
        console.log(nextID);
        $("#itSupport #question" + nextID).addClass("isCurrent");
        $("html,body").animate(
          {
            scrollTop: $("body").offset().top,
          },
          "slow"
        );
      }
      if (getIndex >= 0 && getIndex < 5) {
        var currentWidth = getIndex * 25 + "%";
        $('#itSupportValue').text(currentWidth)
        $("#itSupportProgress").css("width",currentWidth);
      }
    } else if ($("#dataCabling").hasClass("active")) {
      if (getIndex >= 1 && getIndex < 9) {
        $(".question").removeClass("isCurrent");
        var nextID = getIndex + 1;
        console.log(nextID);
        $("#dataCabling #question" + nextID).addClass("isCurrent");
        $("html,body").animate(
          {
            scrollTop: $("body").offset().top,
          },
          "slow"
        );
      }
      if (getIndex >= 0 && getIndex < 9) {
        var currentWidth = getIndex * 12.50 + "%";
        $('#dataCablingValue').text(currentWidth)
        $("#dataCablingProgress").css("width",currentWidth);
      }
    }
  }
});

let sid = 0;
let currentSID = 0;

 $(".submitBBtn").on('click',function () {
   currentSID = $(this).closest(".question").attr("data-index-number");
      
  var form3 = $('#servey'+currentSID).on('submit',function (e) {
          $.ajax({
            type:'POST',
            url: "/survey/answers",
            data: $(this).serialize()+'&sid='+sid,
            success: function(result){
              console.log('bdbd');
                  if(result.success){
                      location.href = "{{route('survey.index')}}";
                  }
            }
         });
      e.preventDefault();
     });

});

$(".nextBBtn").click(function () {
  currentSID = $(this).closest(".question").attr("data-index-number");
 let totalQ = 0;
 let showQ = 0;
  if(currentSID == 1){
      var form1 = $('#survey1').on('submit',function (event) {
           sid =  $("#sid").val();
          $.ajax({
            type:'GET',
            url: "/survey/"+sid,
            success: function(result){
                  $('.survey_ques1').addClass('hide');
                  $('.survey_questions').removeClass('hide');
                  $('.survey_questions').addClass('show');
                  console.log(result)
                  for (let x of result.data.data) {
                    if(x.type == 'textbox'){
                       $("#servey2").append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='text' class='form-control' data-sid='"+x.servey_id+"'  name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></div></div>");
                    }else if(x.type == 'date'){
                       $("#servey2").append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='date' class='form-control' name='"+x.qid+"' id='"+x.qid+"' placeholder='"+x.label+"'></div></div>");
                    }else if(x.type == 'textarea'){
                       $("#servey2").append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><textarea class='form-control' name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></textarea></div></div>");

                    }else if(x.type == 'email'){
                       $("#servey2").append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='email' class='form-control' name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></div></div>");
                    }else if(x.type == 'radio'){
                       $("#servey2").append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='radio' class='form-control' name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></div></div>");
                    }else if(x.type == 'dropdown'){

                    }
                  }
                  totalQ = result.total;
            }
         });
      event.preventDefault();
     });
  }
  else if(currentSID > 1){
      let currentForm = '#servey'+currentSID;
      var form2 = $(currentForm).on('submit',function (e) {
          $.ajax({
            type:'POST',
            url: "/survey/answers",
            data: $(this).serialize()+'&sid='+sid,
            success: function(result){
                  if(result.success){
                       $.ajax({
                                type:'GET',
                                url: "/survey/"+sid+'?page='+currentSID,
                                success: function(result){
                                      let newSID = parseInt(currentSID) +1;
                                        $(currentForm).removeClass('isCurrent');
                                        let csrf = $('meta[name="csrf-token"]').attr('content');
                                        if(result.data.to == result.data.total){
                                           $(currentForm).parent().append('<form  class="form-horizontal question isCurrent" id="servey'+newSID+'" data-index-number="'+newSID+'"><input type="hidden" name="_token" id="token" value="'+csrf+'"><button type="submit" class="btn submitBBtn" id="submitSBtn">Submit</button></form>');
                                        }else{
                                          $(currentForm).parent().append('<form  class="form-horizontal question isCurrent" id="servey'+newSID+'" data-index-number="'+newSID+'"><input type="hidden" name="_token" id="token" value="'+csrf+'"><button type="submit" class="btn nextBBtn float-right">NEXT</button></form>');
                                        }

                                      for (let x of result.data.data) {
                                        if(x.type == 'textbox'){
                                           $("#servey"+newSID).append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='text' class='form-control' data-sid='"+x.servey_id+"'  name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></div></div>");
                                        }else if(x.type == 'date'){
                                           $("#servey"+newSID).append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='date' class='form-control' name='"+x.qid+"' id='"+x.qid+"' placeholder='"+x.label+"'></div></div>");
                                        }else if(x.type == 'textarea'){
                                           $("#servey"+newSID).append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><textarea class='form-control' name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></textarea></div></div>");

                                        }else if(x.type == 'email'){
                                           $("#servey"+newSID).append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='email' class='form-control' name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></div></div>");
                                        }else if(x.type == 'radio'){
                                           $("#servey"+newSID).append("<div class='form-group row'><label for='"+x.name+"' class='col-md-2 control-label'>"+x.label+"</label><div class='col-md-10'><input type='radio' class='form-control' name='"+x.qid+"' id='"+x.name+"' placeholder='"+x.label+"'></div></div>");
                                        }else if(x.type == 'dropdown'){

                                        }
                                      }
                                }
                             });
                  }
            }
         });
      e.preventDefault();
     });
  }
});



