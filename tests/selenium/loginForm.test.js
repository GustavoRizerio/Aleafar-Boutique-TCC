const { Builder, By, Key, until } = require('selenium-webdriver');

// Crie uma solicitação para utilizar o navegador da web 
const driver = new Builder().forBrowser('chrome').build();

(async () => {
  try {
        // caminho 
        await driver.get('http://127.0.0.1:5501/index.html');

        // espera um tempo para realizar a proxima ação
        //esperar um tempo para que a pagina possa ser corretamente carregada antes de iniciar as ações
        await driver.sleep(2000);

        const loginFormLink = await driver.findElement(By.xpath('/html/body/header/section/div/p/a'));
        //faz a ação de clicar no elemento
        await loginFormLink.click();

        const nameInput = await driver.findElement(By.xpath('/html/body/section/div/div[1]/div[2]/form/input[1]'));
        const passwordInput = await driver.findElement(By.xpath('/html/body/section/div/div[1]/div[2]/form/input[2]'));

        const testNameText = 'Marineusa dos Santos';
        const testPasswordText = '12345';

        //para digitar caractere por caractere
        for (const char of testNameText) {
            await nameInput.sendKeys(char);
            //quantidade de tempo de espera para digitar o proximo caractere
            await driver.sleep(100); 
        }

        for (const char of testPasswordText) {
            await passwordInput.sendKeys(char);
            await driver.sleep(100); 
        }

        const loginButton = await driver.findElement(By.xpath('/html/body/section/div/div[1]/div[2]/form/input[3]'));
        await loginButton.sendKeys(Key.ENTER);


        await driver.sleep(500); 

        const clickLoginButton = await driver.findElement(By.xpath('/html/body/section/div/div[1]/div[2]/form/input[3]'));
        await clickLoginButton.click();

    } finally {

    }
})();
