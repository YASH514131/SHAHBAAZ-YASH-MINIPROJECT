function check(){
    f2.t1.value=f1.s1.value;
     }
  function collosol(){
      if(f2.t1.value=='CHORDATE')
      {   var link = document.createElement('a');//create link
          link.setAttribute('href', 'https://www.google.com');//set href
          link.innerHTML = "let's get started";//set text to be seen
          document.body.appendChild(link);
      }
      else if(f2.t1.value=='NON-CHORDATE'){
          var link = document.createElement('a');//create link
          link.setAttribute('href', 'https://www.facebook.com');//set href
          link.innerHTML ="let's get sarted";//set text to be seen
          document.body.appendChild(link);
      }
  }