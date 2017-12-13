# Ativando Frete Gratuito no Woocommerce
## Este código permite modifica o título e custo do método de envio PAC dos Correios

Na sua configuração padrão este código altera o nome do envio PAC dos Correios para **Frete Grátis - PAC**
Também será alterado o custo do envio para **0**


Requisitos:
* Ter instalado e configurado o plugin **woocommerce-correios** (https://github.com/claudiosanches/woocommerce-correios)
* Ter o método de envio PAC ativo e funcional
* Definir um valor mínimo de frete gratuito - Padrão: R$ 199
Caso deseje oferecer frete gratuito para produtos específicos será preciso:
* Criar uma classe de entrega com o slug **free-shipping**
* Adicionar essa classe de entrega a cada produto que receberá o frete grátis

