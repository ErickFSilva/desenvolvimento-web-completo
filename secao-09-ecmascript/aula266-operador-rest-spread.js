// Contexto Rest - Juntar estruturas de dados
console.log('- Contexto Rest - Juntar estruturas de dados:\n')

function soma(...param) {
    let resultado = 0

    param.forEach(valor => resultado += valor)

    console.log(`Exemplo1: ${resultado}`)
}

soma(3, 8, 5, 7, -8, 10, 115)

function multiplicador(m, ...p) {
    let resultado = 0

    p.forEach(valor => resultado += m * valor)

    return resultado
}

console.log(`Exemplo2: ${multiplicador(5, 7, 12, 3, 49)}`)


//////////////////////////////////////////////////////////////////
console.log('\n\n- Contexto Spread - Espalhar estruturas de dados:\n')

// Contexto Spread - Espalhar estruturas de dados
// String
let tituloArtigo = 'Como utilizar o operador rest/spread'

console.log(tituloArtigo)
console.log(...tituloArtigo)
console.log([...tituloArtigo])

// Array
let listaCursos1 = ['NodeJS e MongoDB', 'ES6, TypeScript e Angular 4']
let listaCursos2 = ['Multiplataforma Android/IOS', 'Introdução ao GNU/Linux']
let listaCursosCompleto = [...listaCursos1, 'Web Completo', 'Android Completo', ...listaCursos2]

console.log(listaCursosCompleto)

// Objetos
let pessoa = { nome: 'João', idade: 27 }
let clone = { ...pessoa, endereco: 'rua Abc' }

console.log(clone)