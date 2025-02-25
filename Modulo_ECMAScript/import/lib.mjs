export const saudacao = () => {
    let data = new Date().toLocaleDateString()
    return `Olá, seja muito bem-vindo(a). Hoje é ${data}`
}

export function getEnderecoByCEP(cep) {
    return fetch(`http://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
}