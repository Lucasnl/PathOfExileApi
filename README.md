# Simples Consulta a API do jogo Path Of Exile https://api.pathofexile.com/

# A consulta funciona da seguinte Forma :

- Procura o usuário pelo nome da conta (não pelo nome dos personagens)
- Se a Api não encontrar uma conta com aquele nome , um erro é mostrado.
- Se a conta for encontrada  retorna todos personagens daquela conta com algumas informações
como , Nome daquele personagem , Classe , Level , Liga e os itens que estão equipados no momento.
- Como quase todas Api's , O Rate limiting ao consultar uma conta com muitos personagens pode apresentar erro na hora de mostrar
os itens.


