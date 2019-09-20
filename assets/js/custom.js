

 function delete_data(type,url,id)
  {
      var prom;
      
      prom = "Are you sure you want to Delete this "+type+"?";
      
      if (confirm(prom))
      {
          setTimeout(function ()
          {
              //=========ajax==========//
              jQuery.ajax({
              type: 'POST',
                  url: url,
                  data: {id: id},
                  beforeSend: function () {
//                                $("#loading").show();
                  },
                  success: function (data) {
                    alert(data.trim());
                      $("#row" + id).remove();
                      
                      
                  },
                  error: function (e) {
//                                $("#loading").hide();
                      // Error
                  }
              });
              //=========End of ajax====//
          }, 1000);
      }
  }


function assign_employee(type,url,employee,customer)
  {
      var prom;
      prom = "Are you sure you want to assign this "+type+"?";
      
      if (confirm(prom))
      {
          setTimeout(function ()
          {
              //=========ajax==========//
              jQuery.ajax({
              type: 'POST',
                  url: url,
                  data: {employee: employee,customer:customer},
                  beforeSend: function () {
//                                $("#loading").show();
                  },
                  success: function (data) {
                    alert(data.trim());
                      
                  },
                  error: function (e) {
//                                $("#loading").hide();
                      // Error
                  }
              });
              //=========End of ajax====//
          }, 1000);
      }
  }

function timer(type,url,employee)
  {
      var prom;
      prom = "Are you sure you want to "+type+"?";
      
      if (confirm(prom))
      {
          setTimeout(function ()
          {
              //=========ajax==========//
              jQuery.ajax({
              type: 'POST',
                  url: url,
                  // data: {employee: employee},
                  beforeSend: function () {
//                                $("#loading").show();
                  },
                  success: function (data) {
                    alert(data.trim());
                      
                  },
                  error: function (e) {
//                                $("#loading").hide();
                      // Error
                  }
              });
              //=========End of ajax====//
          }, 1000);
      }
  }


// just for the demos, avoids form submit

$("#branch").validate({
  rules: {
    name: {
      required: true,
      // step: 10
    },
     branch_code: {
      required: true,
    },
     address: {
      required: true,
    }
  },
    errorPlacement: function (error, element) {
            if (element.prop("type") == "text") {
                error.insertAfter($(element).parent('div'));
            } 
            else if (element.prop("type") == "password") {
                error.insertAfter($(element).parent('div'));
            } else  if (element.prop("type") == "email") {
                error.insertAfter($(element).parent('div'));
            } 
        }
});

$("#employee").validate({

  rules: {
    name: {
      required: true,
      // step: 10
    },
     email: {
      required: true,
    },
    branch_id: {
      required: true,
    },
     role: {
      required: true,
    },
    salary: {
      required: true,
    },
     password: {
      required: true,
    }
  },
    errorPlacement: function (error, element) {
            if (element.prop("type") == "text") {
                error.insertAfter($(element).parent('div'));
            } 
            else if (element.prop("type") == "password") {
                error.insertAfter($(element).parent('div'));
            } else  if (element.prop("type") == "email") {
                error.insertAfter($(element).parent('div'));
            } 
            else if (element.prop("type") == "select-one") {
                error.insertAfter($(element).parent('div'));
            } 
        }
});

$("#stock").validate({

  rules: {
    name: {
      required: true,
      // step: 10
    },
     price: {
      required: true,
    },
    quantity: {
      required: true,
    },
     branch_id: {
      required: true,
    },
    weight: {
      required: true,
    }
  },
    errorPlacement: function (error, element) {
            if (element.prop("type") == "text") {
                error.insertAfter($(element).parent('div'));
            } 
            else if (element.prop("type") == "select-one") {
                error.insertAfter($(element).parent('div'));
            } 
        }
});

$("#customer").validate({

  rules: {
    name: {
      required: true,
      // step: 10
    },
     city: {
      required: true,
    },
    branch_id: {
      required: true,
    },
    
  },
    errorPlacement: function (error, element) {
            if (element.prop("type") == "text") {
                error.insertAfter($(element).parent('div'));
            } 
            else if (element.prop("type") == "select-one") {
                error.insertAfter($(element).parent('div'));
            } 
        }
});

$("#token").validate({

  rules: {
     price: {
      required: true,
    },
    desc: {
      required: true,
    },
     timing: {
      required: true,
    },
  
  },
    errorPlacement: function (error, element) {
            if (element.prop("type") == "text") {
                error.insertAfter($(element).parent('div'));
            } 
            else if (element.prop("type") == "select-one") {
                error.insertAfter($(element).parent('div'));
            } 
        }
});