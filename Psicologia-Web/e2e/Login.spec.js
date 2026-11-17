import { test, expect } from '@playwright/test';

// Erro ao usar usuario incorreto
test('Erro de credencial', async ({ page }) => {
  await page.goto('http://192.168.1.110/');
  await page.getByRole('link', { name: 'Login' }).click();
  await page.getByRole('textbox', { name: 'E-mail' }).click();
  await page.getByRole('textbox', { name: 'E-mail' }).fill('admin@admin');
  await page.getByRole('textbox', { name: 'E-mail' }).press('Tab');
  await page.getByRole('textbox', { name: 'Senha' }).fill('admin123');
  await page.getByRole('textbox', { name: 'Senha' }).press('Enter');
  await page.getByRole('button', { name: 'Entrar' }).click();
});

// Login com sucesso e logout
test('login com sucesso e logout', async ({ page }) => {
  await page.goto('http://192.168.1.110/');
  await page.getByRole('link', { name: 'Login' }).click();
  await page.getByRole('textbox', { name: 'E-mail' }).click();
  await page.getByRole('textbox', { name: 'E-mail' }).fill('admin@admin');
  await page.getByRole('textbox', { name: 'E-mail' }).press('Tab');
  await page.getByRole('textbox', { name: 'Senha' }).fill('123');
  await page.getByRole('button', { name: 'Entrar' }).click();
  await expect(page.getByRole('link', { name: 'Sair' })).toBeVisible({ timeout: 10000 });
  await page.getByRole('link', { name: 'Sair' }).click();
});
