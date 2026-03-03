Este no es el típico plugin "bloated" de la librería de WordPress. Es una herramienta de ejecución quirúrgica diseñada para SEOs de trinchera que priorizan el WPO y el control total sobre la arquitectura de enlaces.

Qué hace (y por qué es mejor):
Cero Consultas a DB: A diferencia de Redirection o Yoast, este script no hace llamadas a la base de datos en cada carga de página. Las redirecciones se procesan en el lado del servidor vía PHP (array en memoria), lo que garantiza una respuesta de milisegundos.

Arquitectura Limpia: Ideal para migrar contenido basura a URLs ganadoras o mover tráfico de nichos quemados hacia canales de Telegram, ofertas de CPA o dominios con autoridad.

Blindado al Rastro: No deja tablas huérfanas en tu base de datos ni metadatos innecesarios. Si lo desactivas, desaparece por completo sin dejar rastro ("Footprint").

Versatilidad de Destino: Soporta redirecciones internas (paths relativos) y externas (URLs absolutas) sin restricciones de seguridad ni advertencias morales.

## Configuración

Para añadir nuevas redirecciones, edita el archivo `redirec.php` y localiza el array `$redirecciones`.

```php
$redirecciones = [
    '/url-vieja/' => '/url-nueva/',
    '/post-antiguo' => 'https://sitio-externo.com/articulo',
];
```

### Características del matching:
- **Ignora Query Strings:** Si alguien visita `/url-vieja/?gclid=123`, será redirigido correctamente a `/url-nueva/`.
- **Indiferente a la barra final:** `/url-vieja` y `/url-vieja/` se tratan de la misma forma.
- **Sin base de datos:** Todo se procesa en memoria para máxima velocidad.
