
// for (let i = 1; i <= 10; i = i + 2){
//      console.log ('Im Buzzing')
// }

// const nama = ('Samsul', 'Sambo', 'Suyadi', 'Tirto')
// console.log (nama.length)
// for (let i = 0; i <= nama.length; i++){
//      console.log(nama[i])
// }


// let hari = new Date()
// console.log(hari)



// let x = 7
// let y = prompt ('Masukkan Angka Anda')
// let try = 3
// for (let i = 1; i <= try; i++)
// if( y == x )
// {
//     alert('Selamat! Anda Berhasil')
// }

// else( y != x)
// {
//     alert('Salah! Silahkan coba lagi')
// }


// let x = 7
// let percobaan = 3
// let ben = false

// for (let i = 1; i<= percobaan ; i++ )
//     {
// let tebakan = prompt (` tebakan ke-${i}  Masukkan angka anda Masukkan angka 1-10 `)

// if ( tebakan == x){
//     alert('Selamat kamu benar')
//     ben = true
//     break
// } else {
//     alert('Coba lagi')
// }


// }
// if (!sudahBenar) {
//   alert(`😢 Kesempatan habis. Jawaban yang benar adalah: ${angkaRahasia}`);
// }


// let saldoAwal = Number(prompt('Masukkan Saldo Awal Anda').replaceAll('.',''))
// let Pengeluaran = Number(prompt('Masukkan Pengeluaran anda').replaceAll('.','')) 
// let Penghasilan = Number(prompt('Masukkan Penghasilan Anda').replaceAll('.',''))
// let saldo = saldoAwal - Pengeluaran + Penghasilan
// alert(`Saldo Akhir Anda Adalah ${saldo.toLocaleString('id-ID')}`) 

// document.title ='Vinzent Gabriel'
// // console.log (document.body)
// const body = document.body
// body.append ('Hello World')
// const h1 = document.createElement('h1')
// h1.innerHTML = '<marquee> ANANAAOOAJSOA </marquee>'
// body.append (h1)

// let hargaBarang = Number(prompt('Masukkan Harga Barang Pertama').replaceAll('.',''))
// let hargaBarang2 = Number(prompt('Masukkan Harga Barang Kedua').replaceAll('.',''))
// let total = hargaBarang + hargaBarang2
// alert(`Total harga barang anda adalah ${total.toLocaleString('id-ID')}`)

// const btn = document.getElementById('sigma')
// const btn1 = document.querySelector('.op')
// console.log(btn1) 

// btn.style.border = 'none'
// btn.style.background = 'black'
// btn.style.color = 'yellow'
// btn.style.padding = '10px'

// function amba(){
//     console.log('aman')
//     btn.textContent = 'HIHIHIHA'

// }

// function ori (){
//     btn.textContent = 'Free Robux'
// }


// const body = document.body
// const btn = document.getElementById('btn')
// let teks
// function ai (){
//      teks = document.createElement ('p')
//     teks.innerHTML = 'vinzent'
//     body.append(teks)

// }

// function au(){
//     teks.style.color = 'aqua'
// }

// array
// const array = ['😀', '😍', '😎']//index 0,1,2
// console.log (array)

// const yourArray = []
// yourArray[0] ='😁'
// yourArray[1] ='😑'
// yourArray[2] ='😋'

// console.log(yourArray)

// const arrayKita = new Array ()
// arrayKita [0]= '😂'
// arrayKita [1]= '😂'
// arrayKita [2]= '😂'
// console.log (arrayKita[0])

// const array = ['🍔','🍟','🌭','🍞','🍜']
// // length 5
// // index 4

// const burger = array.includes('🍔')
// console.log (burger)


// if(burger){
//     const posisi = array.indexOf('🌭')
//     const indexBefore = posisi - 1
//     const indexAfter = posisi + 1
//     const before = array[indexBefore]
//     const after = array[indexAfter]
//     console.log(`makanan sebelum burger adalah ${before}`)
//     console.log(`makanan setelah burger adalah ${after}`)
//     const makananAwal = array.shift ()
//     console.log (`makanan awal adalah ${makananAwal}`)
//     const makananAkhir = array.pop ()
//     console.log (`makanan akhir adalah ${makananAkhir}`)
// }
// else{
//     console.log ('Tak Tau')
// }

// const array = []
// array['senyum'] = ['😀']
// array['ketawa'] = ['😂']
// array['lebar'] = ['😁']

// console.log (array['senyum'])

// const array = ['🍔','🍟','🌭','🍞','🍜']//ori
// const newArray = [...array] 

// newArray[0] = '🍚'

// console.log ({array})
// console.log({newArray})

// const array = ['🍔','5',{
//     tomato:function (){
//       console.log('tomat')
//     }
// }  
// ['eat', 'food']]
// // console.log (array[3][1])
//  array[2].tomato()

// const array = ['🍕','🍟','🍔']
// const arrayKamu = ['🧈','🥟','🍚']
// const mergeArray = array.concat (arrayKamu)
// // console.log (mergeArray)
// // for(List in  mergeArray)
//     // console.log(List)

// mergeArray.map((value, index) => console.log(value, index))

// const datas = [
//   {
//     name: 'Vinzent',
//     Usia: 16,
//     Hobi: 'a'
//   },
//   {
//     name: 'Messi',
//     Usia: 16,
//     Hobi: 'a'
//   },
//   {
//     name: 'Samsul',
//     Usia: 16,
//     Hobi: 'a'
//   }
// ];


// datas.map((values, index) =>
// {
//     console.log(values.name)
// })

// function addName(){
//   return 'Vinzent Gabriel'
// }
// alert(addName())

// function addName(nama){
//   return nama
// }
// alert(addName('Vinzent Gabriel'))
// function addName(nama, Akhir){
//   console.log ('Nama awal: ', nama)
//   console.log ('Nama akhir: ', Akhir)
// }
// addName ('Vinzent Gabriel', 'Pratama Putra')

// function addName(){
//   console.log(arguments[0])
//   console.log(arguments[1])
// }
// addName ("Vinzent Gabriel", 'Pratama Putra')

// function addName (awal, depan){
//   console.log (arguments [0], arguments [1])
// }
// addName ("Vinzent Gabriel", "Pratama Putra")

// const  sum = new Function ('x', 'y', 'console.log(x+y)')
// sum (1, 2)
// function sum (x, y){
//   if (x + y == 4){
//      console.log('Alamak')
//   }
//   else{
//     console.log ('Duarrr')
//   }
//   console.log (x + y)
// }
// sum (2, 4)

// function random(){
//   console.log(~~ (Math.random() * 10))
// }
// random ()

// Tugas
function gaji (){
  console.log('Nama Karyawan :', arguments[0])
  console.log('Jumlah hari masuk kerja :', arguments[1])
  console.log('Nama Gaji perhari :', arguments[2])
  console.log('Gaji perbulan adalah :', arguments[1] * arguments[2])
}
gaji ('Vinzent Gabriel', 20, 100000)