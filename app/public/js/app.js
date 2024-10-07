//いいね追加
const good = document.getElementById("good");
const ungood = document.getElementById("ungood");
function like(postId) {
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: `/like/${postId}`,
    type: "POST",
  })
    .done(function (data, status, xhr) {
      console.log(data);

      //good.addEventListener('click', function(){
        console.log('test');
        good.classList.toggle('hidden');
        if(good.classList.contains('hidden')){
          ungood.classList.remove('hidden');
        }else{
          ungood.classList.add('hidden');
        }
      //})
    })
    .fail(function (xhr, status, error) {
      console.log()
    })
}

//いいね解除

function unlike(postId) {
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: `/unlike/${postId}`,
    type: "POST",
  })
    .done(function (data, status, xhr) {
      console.log(data)

      //ungood.addEventListener('click',function(){
        ungood.classList.toggle('hidden');

        if(ungood.classList.contains('hidden')){
          good.classList.remove('hidden');
        }else{
          good.classList.add('hidden');
        }
      //})
      
    })

    .fail(function (xhr, status, error) {
      console.log()
    })
}

