


function FormToJson(var form){
  const FormToJson=elements=>[].reduce.call(element, (data, element))
}


function handleSubmit(var event){
    const handleFormSubmit = event =>{
      event.preventDefault();


    const data={};

    const dataContainer = document.getElementsByClassName('form-group')[0];

    dataContainer.textContent=JSON.stringify(data,null,"  ");
  };
  const form = document.getElementsByClassName('form-group')[0];
  form.addEventListener('submit', handleFormSubmit);
}
