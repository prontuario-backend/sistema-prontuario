const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const sData = document.querySelector('#data')
const sHora = document.querySelector('#hora')
const slqdA = document.querySelector('#lqdA')
const slqdE = document.querySelector('#lqdE')
const sConc = document.querySelector('#conc')
const sVoral = document.querySelector('#voral')
const sVpare = document.querySelector('#vpare')
const sqAdm = document.querySelector('#qAdm')
const sSonda = document.querySelector('#sonda')
const slaOutro = document.querySelector('#laOutro')
const sDiurese = document.querySelector('#diurese')
const sEstase = document.querySelector('#estase')
const sVomito = document.querySelector('#vomito')
const sleOutro = document.querySelector('#leOutro')
const btnSalvar = document.querySelector('#btnSalvar')

let itens
let id


function loadItens() {
  itens = getItensBD()
  tbody.innerHTML = ''
  itens.forEach((item, index) => {
    insertItem(item, index)
  })

}

//função de add dados na tabela

function insertItem(item, index) {
  let tr = document.createElement('tr')

  tr.innerHTML = `
      <td>${item.data}</td>
      <td>${item.hora}</td>
      <td>${item.lqdA}</td>
      <td>${item.lqdE}</td>
      <td>${item.conc}</td>
      <td>${item.voral}</td>
      <td>${item.vpare}</td>
      <td>${item.qAdm}</td>
      <td>${item.sonda}</td>
      <td>${item.laOutro}</td>
      <td>${item.diurese}</td>
      <td>${item.estase}</td>
      <td>${item.vomito}</td>
      <td>${item.leOutro}</td>

      <td class="acao" style="text-align: center;">
        <button onclick="editItem(${index})"><i class="fa-solid fa-file-pen"></i></button>
      </td>
      <td class="acao" style="text-align: center;">
        <button onclick="deleteItem(${index})"><i class="fa-solid fa-trash-can"></i></button>
      </td>
    `
  tbody.appendChild(tr)
}

// função de editar e deletar tados na tabela 

function editItem(index) {

  openModal(true, index)
}

function deleteItem(index) {
  itens.splice(index, 1)
  setItensBD()
  loadItens()
}

function openModal(edit = false, index = 0) {
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }

  if (edit) {
    sData.value = itens[index].data
    sHora.value = itens[index].hora
    slqdA.value = itens[index].lqdA
    slqdE.value = itens[index].lqdE
    sConc.value = itens[index].conc
    sVoral.value = itens[index].voral
    sVpare.value = itens[index].vpare
    sqAdm.value = itens[index].qAdm
    sSonda.value = itens[index].sonda
    slaOutro.value = itens[index].laOutro
    sDiurese.value = itens[index].diurese
    sEstase.value = itens[index].estase
    sVomito.value = itens[index].vomito
    sleOutro.value = itens[index].leOutro
    id = index
  } else {
    sData.value = ''
    sHora.value = ''
    slqdA.value = ''
    slqdE.value = ''
    sConc.value = ''
    sVoral.value = ''
    sVpare.value = ''
    sqAdm.value =  ''
    sSonda.value = ''
    slaOutro.value = ''
    sDiurese.value = ''
    sEstase.value = ''
    sVomito.value = ''
    sleOutro.value =  ''
  }

}

// função de salvar

btnSalvar.onclick = e => {
  if (sData.value === '' || sHora.value === '' || slqdA.value === '' || slqdE.value === ''  || sConc.value === ''  || sVoral.value === ''  || sVoral.value === ''  || sVpare.value === ''  || sqAdm.value === ''  || sSonda.value === ''  || slaOutro.value === ''  || sDiurese.value === ''  || sEstase.value === ''  || sVomito.value === ''  || sleOutro.value === '' ) {
    return
  }

  e.preventDefault();

  if (id !== undefined) {
    // Verifica se itens[id] está definido
    if (itens[id] === undefined) {
      itens[id] = {}; // Inicializa um novo objeto se não estiver definido
    }
    itens[id].data = sData.value
    itens[id].hora = sHora.value
    itens[id].lqdA = slqdA.value
    itens[id].lqdE = slqdE.value
    itens[id].conc = sConc.value
    itens[id].voral = sVoral.value
    itens[id].vpare = sVpare.value
    itens[id].qAdm = sqAdm.value
    itens[id].sonda = sSonda.value
    itens[id].laOutro = slaOutro.value
    itens[id].diurese = sDiurese.value
    itens[id].estase = sEstase.value
    itens[id].vomito = sVomito.value
    itens[id].leOutro = sleOutro.value
  } else {
    itens.push({ data: sData.value, hora: sHora.value, lqdA: slqdA.value, slqdE: slqdE.value, conc: sConc.value, voral: sVoral.value, vpare: sVpare.value, qAdm: sqAdm.value, sonda: sSonda.value, laOutro: slaOutro.value, diurese: sDiurese.value, estase: sEstase.value, vomito: sVomito.value, leOutro: sleOutro.value })
  }

  setItensBD()

  modal.classList.remove('active')
  loadItens()
  id = undefined
}

const getItensBD = () => JSON.parse(localStorage.getItem('dbfunc')) || []
const setItensBD = () => localStorage.setItem('dbfunc', JSON.stringify(itens))

loadItens()