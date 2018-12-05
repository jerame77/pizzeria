function AfficherLesFormations()
{
    $.ajax
    (
            {
              type:"get",
              url:"AfficherLesFormations.php",
              data:"idActivite="+$('#lstActivites').val(),
              success: function(data)
              {
                  $('#divFormations').empty();
                  $('#divAgents').empty();
                  $('#divFormations').append(data);
              },
              error:function()
              {
                  alert("Erreur pour récupérer les formations");
              }
            }
    );
}

function AfficherLesParticipants()
{
    $.ajax
    (
            {
              type:"get",
              url:"AfficherLesParticipants.php",
              data:"idFormation="+$('input[type=radio]:checked').val(),
              success: function(data)
              {
                  $('#divAgents').empty();
                  $('#divAgents').append(data);
              },
              error:function()
              {
                  alert("Erreur pour récupérer les formations");
              }
            }
    );
}