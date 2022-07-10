//let tipoIndicador ="uf";
let myChart;
function myFunction() {

let tipoIndicador = document.getElementById('mySelect').value

const ctx = document.getElementById('myChart')
    if (myChart) {
            myChart.destroy();
        }      
    myChart = new Chart(ctx, {
    type:'bar',
    data:{
        datasets: [{
            label: '',
            backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
            borderColor: ['black'],
            borderWidth:1
        }]
    },
    options:{
        scales:{
            y:{
                beginAtZero:true
            }
        }
    }
})

const url = `https://mindicador.cl/api/${tipoIndicador}`;
console.log(url);
fetch(url)
    .then( response => response.json() )
    .then( datos => mostrar(datos) )
    .catch( error => console.log(error) )


const mostrar = (api) =>{
     for (let index = 0; index < api.serie.length; index++) {

    myChart.data['labels'].push(api.serie[index].fecha)
    myChart.update()
    }
    
    for (let index = 0; index < api.serie.length; index++) {
    
     myChart.data['datasets'][0].data.push(api.serie[index].valor)
       myChart.update()
    

    }
        
}   
} 