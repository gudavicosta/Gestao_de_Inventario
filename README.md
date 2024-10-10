Gestão de Inventário
Descrição

Este projeto tem como objetivo realizar a gestão do estoque de produtos em um Petshop, permitindo o controle de entrada e saída de itens. Ele oferece funcionalidades para adicionar, remover e consultar produtos no estoque, além de gerar relatórios de inventário e enviar notificações de estoque quando os níveis atingem valores críticos.
Funcionalidades

    Adicionar Produto: Insere novos produtos no estoque.
    Remover Produto: Remove produtos existentes no estoque.
    Consultar Estoque: Exibe os produtos atualmente disponíveis no estoque, com suas quantidades.
    Relatórios de Inventário: Gera relatórios periódicos sobre o estado do estoque, como níveis de estoque baixos, histórico de movimentações e tendências de demanda.
    Notificações de Estoque: Envia alertas quando os níveis de estoque atingem valores críticos, com sugestões para reabastecimento.

Classes

    Usuário (PetshopUser): Representa os usuários do sistema, com permissões para gerenciar o inventário. Cada usuário possui atributos como nome, email, senha e cargo.
    Produto (Product): Define os produtos disponíveis no estoque, com atributos como nome, categoria, preço e quantidade em estoque.
    Entrada de Produto (ProductEntry): Registra a entrada de novos itens no estoque, armazenando dados como produto, data, quantidade e fornecedor.
    Saída de Produto (ProductExit): Registra a retirada de itens do estoque, armazenando dados como produto, data, quantidade e cliente.
    Relatório de Inventário: Gera e armazena relatórios sobre o status do estoque e movimentações de entrada e saída de produtos.

Tecnologias Utilizadas

    Laravel: Framework PHP utilizado para o desenvolvimento do backend.
    MySQL/PostgreSQL: Bancos de dados relacionais usados para armazenar informações do sistema.
    Composer: Gerenciador de dependências para PHP.
