# Volta ao mundo - Chile

## Visão Geral
Portal dedicado a explorar a riqueza cultural, gastronômica e turística do Chile. O site oferece aos visitantes uma janela para as tradições chilenas, a vibrante cena culinária e os destinos turísticos imperdíveis, proporcionando uma experiência imersiva que convida tanto turistas quanto locais a descobrir e redescobrir as maravilhas do Chile.

## Seções Principais

### Gastronomia Chilena
Explore os sabores únicos do Chile através de receitas tradicionais, perfis de chefs locais e artigos sobre os ingredientes característicos da região. Inclui guias práticos para preparar pratos chilenos em casa e recomendações de restaurantes para experiências autênticas.

### Turismo no Chile
Descubra os principais destinos turísticos do Chile, de paisagens desérticas no norte às geleiras no sul. Oferece guias de viagem, dicas de itinerários e informações práticas para planejar visitas, incluindo atrações, melhores épocas e opções de acomodação.

### Cultura Local
Mergulhe na cultura chilena com artigos sobre festivais, música local, arte contemporânea e cinema. Destaques sobre figuras influentes na cultura chilena e o papel do país no cenário global.

## Funcionalidades Interativas

- **Comentários e Avaliações**: Usuários podem deixar comentários e avaliações sobre restaurantes, atrações turísticas e receitas.

## Tecnologia e Design
O site é intuitivo e responsivo, com uma navegação visualmente agradável, inspirado nas cores e texturas do Chile.

## Segurança e Confiabilidade
Implementamos medidas de segurança robustas para proteger as informações dos usuários, incluindo proteção contra SQL Injection e criptografia de dados sensíveis.

## Funcionalidades de Autenticação e Segurança

### Objetivos
- Implementar um sistema de login e registro de usuários.
- Proteger contra SQL Injection.
- Utilizar hashing de senhas.

### Plano
- Criar tabelas no banco de dados para armazenar usuários e comentários.
- Usar PDO (PHP Data Objects) para interações seguras com o banco de dados.
- Utilizar `password_hash()` e `password_verify()` para senhas.

## Funcionalidades de Usuário

### Objetivos
- Permitir cadastro de novos usuários com senha criptografada.
- Criar uma página para postagem de comentários por usuários logados.
- Armazenar comentários de forma segura no banco de dados.

### Plano
- Formulário de registro de usuários.
- Formulário de login.
- Página para postagem de comentários.

## Painel Administrativo

### Objetivos
- Visualizar todos os comentários postados.
- Moderação de comentários (aprovar/reprovar).

### Plano
- Página de administração acessível apenas para administradores.
- Listagem de comentários com opções de moderação.

## Importação de Comentários

### Objetivos
- Permitir importação de comentários via arquivos JSON.

### Plano
- Página de importação de JSON.
- Parser para processar e salvar os comentários no banco de dados.

## Tecnologias Utilizadas
- **Front-end**: HTML e Bootstrap.
- **Back-end**: PHP.

## Autores
- Rafael Henrique Greco