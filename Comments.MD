## C00: Instalación y Configuración de entorno
*Comentario no vinculado con un fichero*

Herramientas a utilizar
- Laravel 11
- Filament
- Tailwind
- TypeScript (aun no decidido)
- SQLite
### Instalación (WSL)
A día de hoy está Laravel 12, pero se optará por la versión 11, debido a preferencias de desarrollo, como el utilizar Breeze, entre otras configuraciones.

__Importante:__
El proyecto se está desarrollando en Windows 10, pero se está utilizando `WSL` 🐧, la versión (Ubuntu-22.04). Para instalar la `WSL`, se instaló desde **MicrosoftStore**: [Ubuntu 22.04.5 LTS](https://www.microsoft.com/store/productId/9PN20MSR04DW?ocid=libraryshare).
Para saber que versión de **WSL** está corriendo se puede saber con el siguiente comando en la terminal de Windows: `wsl --list --verbose`, en el caso del proyecto aparece lo siguiente:
```bash
❯ wsl --list --verbose
  NAME              STATE           VERSION
* Ubuntu-22.04      Running         2
  Ubuntu            Stopped         2
  docker-desktop    Stopped         2
```
Luego ejecutando `wsl --set-default Ubuntu-22.04` se selecciona la versión de WSL a utilizar.

Por defecto `WSL` viene sin algunso paquetes, como los faltantes para tener PHP, entonces para preparar el sistema se agrega el repositorio de **Ondřej Surý** (mantenedor oficial de PHP para Ubuntu/Debian) con el siguiente comando ya **dentro de la terminal** de `WSL`:
```bash
sudo apt update
sudo apt install -y software-properties-common ca-certificates lsb-release apt-transport-https
sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y
sudo apt update
```
Luego sigue la instalación de PHP 8.3 en este caso
```bash
sudo apt install -y php8.3 php8.3-cli php8.3-fpm php8.3-mbstring php8.3-xml php8.3-zip php8.3-mysql php8.3-curl php8.3-bcmath
```

Luego para establecer la versión de PHP 8.3 como versión predeterminada
```bash
sudo update-alternatives --set php /usr/bin/php8.3
```
Luego será timportante instalar **Composer**:
```bash
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

### Instalación (Composer y BD)
*Las siguientes instrucciones son considerando los pasos previos especificados en Instalación (WSL)*

Ahora hay un problema con **WSL** y Windows, ese a estar trabajando dentro de **Ubuntu (WSL)**, hay por defecto una mezcla involuntaria con Windows que causa errores con **Node**.

Si deseo instalar **Node** este se instalará en Windows, es decir que **WSL** utiliza el Node de Windows, causando conflicto, ya que Ubuntu usa (ext4) y Windows NTFS, entonces cuando Node.js (Windows) intenta acceder a ``/home/dalpo/workspace/zodiak`` (WSL), lo traduce a ``\\wsl.localhost\..``. (ruta UNC), que no funciona bien para operaciones de npm

Debido a el problema previo se decide utilizar es mantener Node en Windows como ya estaba por defecto, para el su uso en otros proyectos, etc. Y mantener otra versión de Node pero solo para **WSL** y que se utilice esa dentro de WSL.

Para instalar Node.js en WSL:
```bash
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt install -y nodejs
```

Luego se fuerza WSL a usar su propia instalación de Node:
```bash
# En la ~/.bashrc o ~/.zshrc (WSL):
export PATH="/usr/bin:$PATH"
source ~/.bashrc  # Recarga la configuración
```
Esto asegura que cuando se ejecute npm en WSL, use la versión de Linux.

#### Ahora toca SQLite
Para instalar el paquete de SQLite para PHP se hace con el siguiente comando:
```bash
sudo apt install php8.3-sqlite3
```

Luego se deberá reiniciar el servicio PHP-FPM
`sudo service php8.2-fpm restart`

Luego verificar que el dirver esté habilitado:
`php -m | grep sqlite  # Debe mostrar "sqlite3"`

Ahora dentro de la ruta del proyecto ejecutar:
`touch database/database.sqlite`


### Seguir con la instlación normal
Y ahora si se segue con la configuración normal de Laravel.
`composer create-project laravel/laravel:^11.0 nombre-del-proyecto`
Con este comando se creará el proyecto con la versión de Laravel **especificada**

Luego dentro de la carpeta al ejecutar `php artisan serve` se podrá comprobar si la instalación fue completada y correcta accediendo a http://127.0.0.1:8000.

Será importante instalar Breeze, con el comando: `composer require laravel/breeze --dev` estará listo para segur con Livewire.

Ahora para instalar Livewire se deberá ejecutar: `php artisan breeze:install livewire`

Instalación de dependencias de Node con `npm install && npm run dev`, con este comando se realizan 2 cosas importante:
- Instalar todas las dependencias JS/Node.js/ definidas en el package.json (incluyendo Tailwind CSS, Alpine.js, Vite, etc.)
- Estas dependencias son necesarias para:
	- Compilar los estilos CSS (Tailwind)
	- Procesar el JavaScript (Alpine.js, Livewire)
	- Manejar los assets con Vite

Luego de esta instalación con `npm run deb` se compila los assets en modo desarrollo (más rápido, sin optimizadores finales ). Generando en `/public/build`
- Los archivos CSS compilados
- Los archivos JavaScript procesados
- El manifiesto que Vite usa para cargar los assets

Esto último es importante ya que Breeze usa
- **Tailwind CSS** para estilos
- **Vite** como bundler (reemplazo de Laravel Mix)
- **Alpine.js** (en el stack Livewire)

Sin la ejecución de estos comando:
- Los estilos no aparecerán
- Alpine.js no funcionará
- La autenticación no tendrá estilos adecuados

Si se hacen cambios en:  `resources/js/app.js` o `resources/css/app.css` se deberá volver ejecutar `npm run dev` o `npm run watch` para compilación automática al detectar cambios

#### Qué es LiveWire
Laravel Breeze también ofrece un scaffolding de [Livewire](https://livewire.laravel.com/). Livewire es una forma poderosa de construir interfaces de usuario dinámicas y reactivas en el frontend utilizando solo PHP. Livewire es una excelente opción para equipos que utilizan principalmente plantillas Blade y buscan una alternativa más simple a los frameworks SPA impulsados por JavaScript como Vue y React. Para utilizar la pila de Livewire, puedes seleccionar la pila frontend de Livewire al ejecutar el comando Artisan `breeze:install`.
#### Qué es Breeze?
[Laravel Breeze](https://github.com/laravel/breeze) es una implementación mínima y simple de todas las [funciones de autenticación](https://documentacionlaravel.com/docs/11.x/authentication) de Laravel, incluyendo inicio de sesión, registro, restablecimiento de contraseña, verificación de correo electrónico y confirmación de contraseña. Además, Breeze incluye una simple página de "perfil" donde el usuario puede actualizar su nombre, dirección de correo electrónico y contraseña. La capa de vista predeterminada de Laravel Breeze está compuesta por simples [plantillas Blade](https://documentacionlaravel.com/docs/11.x/blade) estilizadas con [Tailwind CSS](https://tailwindcss.com/). Además, Breeze ofrece opciones de scaffolding basadas en [Livewire](https://livewire.laravel.com/) o [Inertia](https://inertiajs.com/), con la opción de usar Vue o React para el scaffolding basado en Inertia.
## C01: Creación de la BD
Para el manejo de los datos será importante el uso de los Models y Controllers, pero antes será importante la creación de la BD.

Antes de crear las tablas, será importante **tener una BD creada** y en `.env` **vincular la conexión con esa BD**.
En este proyecto se hará uso de SQLite, por lo que en el fichero nombrado debería quedar más o menos así:
```ts
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= # <-- Lo ideal en desarrollo será una ruta absoluta
DB_USERNAME=root
DB_PASSWORD=
```
Ahora para establecer con "SQLite" la conexión con esa BD, por defecto Laravel crear el archov de BD en : `/mirador/database/database.sqlite`
Como en el ejemplo del código, será importante copiar la **ruta absoluta** de fichero, es decir: `/home/dalpo/Dev/mirador/database/database.sqlite`.
**Esto último será de suma importancia para cuando se cargue el proyecto en otro entorno OS**
Quedaría así (En Ubuntu que es donde se está haciendo esto ahora):
```ts
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=/home/dalpo/Dev/mirador/database/miradordatabase.sqlite
DB_USERNAME=root
DB_PASSWORD=
```
### SQL no tiene servidor?
SQLite no tiene servior, es decir, **no se necesita instalar ni ejecutar un proceso de base de datos separado**, como sí ocurra con otros sistemas como MySQL o PostgresSQL.
- MySQL, PostgreSQL, MariaDB, etc. son sistemas de bases de datos cliente-servidor. Debes:
    - Instalar el servidor (por ejemplo, mysqld).
    - Iniciar ese servicio.
    - Conctarte a él usando host, puerto, usuario y contraseña.

- SQLite en cambio es:
    - Un archivo en tu disco.
    - El motor de base de datos está integrado directamente en tu aplicación (por ejemplo, PHP o Node.js acceden al archivo .sqlite).
    - No necesitas host, puerto, ni servicios corriendo.
    - Solo necesitas saber dónde está ubicado el archivo.

Entonces debido a esto ↑ que se utiliza SQLite en el proyecto
### Migración
Luego de toda la configuración previa se deberá hacer las migraciones, Laravel por defecto (gracias a Breeze) crea unas tablas en la BD, 3 tablas, lo siguiente será crear las tablas
## C03: Tablas:
Hay varias formas de crear las tablas, para eso en Laravel se trabaja con las migraciones, para ahorrar tiempo y errores, con el siguiente comando se puede crear un modelo y una migración de una tabla: `php artisan make:model Comment -m`, si solo se quiere crear la migración sería con el siguiete comando:`php artisan make:migration create_flights_table`

## C04: Modelos
*Antes de crear migraciones o modelos leer C03 / Comentario no vinculado a un fichero*
No todas las tablas en Laravel deben tener un modelo, para eso de deben cumplir ciertas condiciones.

| Caso                                                    | ¿Crear Modelo?                      |
| ------------------------------------------------------- | ----------------------------------- |
| Tabla principal (como `Propietario`, `Residente`, etc.) | ✅ Sí                                |
| Tabla pivot simple (como `departamento_residente`)      | ❌ No (salvo que tenga campos extra) |
| Tabla auxiliar (`roles`, `torres`) que usarás en select | ✅ Sí                                |
| Tabla técnica (`migrations`, `password_resets`)         | ❌ No                                |


### Cuándo sí crear un modelo?
- Se va a consultar o modificar datos de esta tabla desde Laravel
- Se necesita usar **Eloquent** para esa tabla (ejemplo: relaciones, scoptes, etc)
- Cuando se hagan operaciones como: `Model::all()`, `Model:find()`, `Model:create()`, etc.
Como se crea un modelo con artisan: `php artisan make:model Departamento`

### Cuándo no es necesario un modelo?
- La tabla es auxiliar o de apoyo(ejemplo: tablas pivot o de logs muy simples)
- Cuando nunca se va a interactuar directamente desde el código (ejmplo: una tabla migrations, falied_jobs, password_resets, etc)
- Cuando solo se usará DB Query Builder y no Eloquent: `DB::table('torres')->where('nombre', 'A')->get();`

### Casos intermedios: Tablas Pivot
Las tablas intermedias en relaciones `many to many` a veces no requirern modelo, porque Laravel las gestion automáticamente. Pero cuando se quiere agregar campos extras en la tabla pivot (como fechas, estados, etc), entonces sí conviene hacerle un modelo y usar `->withPivot(...)`

## C02: Creación de Usuario por defecto (Con Seeder)
Para poder crear un usuario por defecto y que esté anclado con las seeds será de la siguiente forma:

### Creación de un Seeder
Al ejectuar este comando se creará un seeder especifico:
`php artisan make:seeder UserSeeder`


### C03: Tablas Pivote (no aplica)
Es una table que se usa para representar realaciones de **muchos a muchos**, por ejemplo:
- Tabla `Students`
- Tabla `courses`
Un estudiante puede tomar muchos cursos, y un curso puede tener muchos estudiantes.
```
students
    id | name

courses
    id | title

course_student   ← 🔸 tabla pivote
    id | student_id | course_id
```
Entonces la tabla pivote guarda referencias (FKs) a las otras 2 tablas, y no suele tener mucha lógica propia, Sirve como un "puente" para vincular dos modelos.
Uno de los casos del proyecto serí la relación de las tablas `apartaments` y `residents`. Es decir:
- Un departamento puede tener varios residentes
### C04: Soft Delete
Esta función de Laravel lo que hace es "**no eliminar físicamente un registro de la BD**", sino que le marca una fecha y hora en la columna `delete_at`. Esto permite "ocultar" el registro como si estuviera eliminado, pero aún sigue en la BD.
Habitualmente se usa cuando:
- Se quere permitir recuperación de registros eliminados
- Se necesita mantener un historial
- Se desea auditar o consultar registrso "eliminados"
- Eliminar físicamente sería riesgoso o indebido
Entonces cuando se usa `SoftDeletes`, Laravel oculta automáticamente los registros eliminados en consultas:
```php
User::all(); // NO muestra los eliminados
```

Para ver los eleiminados sería:
```php
User::onlyTrashed()->get();
```

Para su uso en el Modelo se debería agregar el trait:
```php
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
}
```

Y además en la migración:
```php
$table->softDeletes(); // Crea columna deleted_at
```

Info:
| Acción          | Resultado                                    |
| --------------- | -------------------------------------------- |
| `delete()`      | Marca como eliminado (llenando `deleted_at`) |
| `forceDelete()` | Elimina realmente de la BD                   |
| `restore()`     | Revierte la eliminación                      |
| `onlyTrashed()` | Muestra solo eliminados                      |
| `withTrashed()` | Muestra todos                                |

###
###
###
###
###
###
###
###
## C05: Redundancia de datos
Por defecto, Laravel incluye una migración llamada ``0001_01_01_000000_create_users_table``, la cual define campos importantes en la tabla ``users``. Sin embargo, en este caso, la tabla ``users`` está relacionada con la tabla ``staff``.

La tabla ``staff`` representa al personal que trabaja en el edificio. Por reglas de negocio, cada ``staff`` debería tener un user en el sistema para poder iniciar sesión. No obstante, ``staff`` ya contiene un campo de nombre, al igual que la tabla ``users``.

Cabe destacar que ``staff`` obtiene su nombre desde la tabla ``people``, mediante una clave foránea (person_id). Por lo tanto, ``staff`` ya cuenta con un nombre gracias a su relación con ``people``.

Dado esto, mantener el campo name en la tabla ``users`` genera redundancia de datos, ya que ese dato ya existe en la estructura relacionada.
La mejor solución sería eliminar el campo name de la tabla ``users``, y utilizar los datos que provienen desde ``people``, a través de la relación con ``staff``.

## C06 Tablas extras de Laravel
**Laravel** al instalarse con ciertas caracteristicas como `Breeze`, esto hace que además se agregen tablas (migraciones) las cuales son tablas **esenciales para el funcionamiento de para distintas funcionalidades**

### Password Reset Tokens
Tabla para gestionar los tokens que permiten restablecer la contraseña.
```php
Schema::create('password_reset_tokens', function (Blueprint $table) {
    $table->string('email')->primary();
    $table->string('token');
    $table->timestamp('created_at')->nullable();
});
```
- Guarda el email, token y fecha de creación del token para recuperación de contraseña.
- Permite validar que el token aún sea válido para resetear la contraseña.

### Sessions
Tabla que almacena las sesiones activas de los usuarios.
```php
Schema::create('sessions', function (Blueprint $table) {
    $table->string('id')->primary();
    $table->foreignId('user_id')->nullable()->index();
    $table->string('ip_address', 45)->nullable();
    $table->text('user_agent')->nullable();
    $table->longText('payload');
    $table->integer('last_activity')->index();
});
```
- Guarda información de la sesión: id, usuario asociado, IP, agente de usuario (browser), datos adicionales (payload) y última actividad.
- Facilita la gestión y control de sesiones para autenticación y seguridad.

### Cache y Cache_locks
```php
Schema::create('cache', function (Blueprint $table) {
    $table->string('key')->primary();
    $table->mediumText('value');
    $table->integer('expiration');
});

Schema::create('cache_locks', function (Blueprint $table) {
    $table->string('key')->primary();
    $table->string('owner');
    $table->integer('expiration');
});
```
- Usadas por Laravel para almacenar datos temporales en caché.
- cache guarda los datos cacheados.
- cache_locks gestiona bloqueos para evitar condiciones de carrera en operaciones de caché.

## C07: Semillas
Laravel incluye la capacidad de llenar tu base de datos con datos utilizando clases de seed. Todas las clases de seed se almacenan en el directorio `database/seeders`. Por defecto, se define una clase DatabaseSeeder para ti. Desde esta clase, puedes usar el método call para ejecutar otras clases de seed, lo que te permite controlar el orden de llenado.

Para generar un seeder, con el este comando se crearía la seed:
```shell
php artisan make:seeder UserSeeder
```

Una clase de seeder solo contiene un método por defecto: run. Este método se llama cuando se ejecuta el comando db:seed de Artisan. Dentro del método run, puedes insertar datos en tu base de datos como desees. Puedes usar el query builder para insertar datos manualmente o puedes usar factory de modelos Eloquent. Como ejemplo, vamos a modificar la clase DatabaseSeeder predeterminada y añadir una declaración de inserción en la base de datos al método run

Dentro de la clase `DatabaseSeeder`, puedes usar el método `call` para **ejecutar clases de siembra adicionales**. Usar el método `call` te **permite dividir la siembra de tu base de datos en múltiples archivos** para que ninguna clase de sembrador se vuelva demasiado grande. El método `call` acepta un array de clases de sembrador que deben ser ejecutadas:
```php
public function run(): void
{
    $this->call([
        UserSeeder::class,
        PostSeeder::class,
        CommentSeeder::class,
    ]);
}
```
Luego de ya tener preparadas las `seeds` faltaría ejecutar `db:seed` para "sembrar la BD". Por defecto el comando `db:seed` ejecuta la clase `Database\Seeders\DatabaseSeeder`, que a su vez puede invocar otras clases de siembra. Sin embargo, se puede usar la opción `--class` para especificar una clase de sembrador especifica para ejecutar de forma individual:
```shell
php artisan db:seed

php artisan db:seed --class=UserSeeder
```

**Migrado con seeds**
Tambien se puede sembrar la BD utilizando el comando `migrate:fresh` en combinación con la opción `--seed`, que eliminará todas las tablas y volcerá a ejecutar todas las migraciones. Últil para reconstruir completamente la BD. La opción `--seeder` se puede usar para especificar un sembrador especifico a ejecutar:
```bash
php artisan migrate:fresh --seed

php artisan migrate:fresh --seed --seeder=UserSeeder
```
*más info en -->* [BD:Seeders](https://documentacionlaravel.com/docs/11.x/seeding)

## C08: Un dato u otro (run o documento)
A la hora de crar un "**Person**" o "**Staff**", está en ambas tablas las columnas:
```php
$table->string('run')->unique()->nullable();
$table->string('document_number')->unique()->nullable();
```
Esto quiere decir que ambas pueden ser **Null**, esto es lógico ya que si tengo un **Run**, el `document_number` debería estar en `null` cuando cree un registro ya sea con Seeds o manual en el registro. Pero esto puede llevar a un error, se tiene que establecer que: "**tiene que ser uno o el otro, no pueden ser ambos null en un registro**", para solucionar esto se puede hacer de un par de formas, esto dependerá de la BD en la cual se hacen los registros, MySQL o SQLite tienen distintos comandos que aveces no son compatibles entre ellos, pero para solucionar este problema ser hará desde los **Models**.

Por ejemplo dentro del `app/Models/Staff.php` deberá estar:
```php
static::saving(function ($staff) {
            if (empty($staff->run) && empty($staff->document_number)) {
                throw new \Exception('Debe ingresar al menos RUN o Document Number.');
            }
        });
```
Esto `if` verifica que cuando se haga una población de los datos de la tabla `staff` que no pueden estar vacios (`null`) ambos, solo puede estar `null` uno de los dos.

__Pero esto solo funcionará si se usa "**Eloquent en lugar de BD facade**"__
### DB Facade (Consulta Directa con SQL)
Es una capa que permite ejecutar consultas SQL directas sin pasar por el modelo **Eloquent**, por ejemplo:
```php
DB::table('staffs')->insert([...]);
```
- No usa modelos Eloquent, por lo tanto:
    - No dispara eventos del modelo (como `creating`, `saving`, etc)
    - Iganora validaciones definidas en el modelo
    - No aplica mutadores/accessors (ej: `getFullNameAttribute`)
- Más rápido para operaciones masivas (insertar 1000 registros)
- ütil para consultas complejas o cuando Eloquent es limitado

Entonces en base a este caso de "run o número de documento", la validación `boot()` del modelo `Staff` no se ejectuará nunca al usar `DB::insert`.

### Eloquent (ORM de Laravel)
Es el sistema de **mapeo objeto-relacional** (ORM) de Laravel. Trabajao con modelos (clases PHP que representan tablas). Ejemplo:
```php
Staff::create([...]);
```
- Usa modelos, por lo tanto:
    - Dispara eventos del modelo (ej: validaciones en `boot()`).
    - Aplica mutadores/accessors.
    - Maneja automáticamente `timestamps`.
    - Soporta relaciones (`hasMany`, `belongsTo`, etc.).
- Más lento en operaciones masivas (pero tiene métodos como `insert` para optimizar).
- Mejor legibilidad y mantenimiento.
En base al caso de "run o número de documento" si uso `Staff::create()`, la validación creada en el modelo `Staff` si funcionará.

### Cuando usar cada uno
**Usa Eloquent cuando:**
- Necesitas validaciones, eventos o relaciones.
- Priorizas código mantenible y claro.
- Ejemplo: CRUD de usuarios, staff, etc.

**Usa DB Facade cuando:**
- Necesitas máxima velocidad (miles de registros).
- Haces consultas complejas con subconsultas.
- Ejemplo: Reportes con cálculos agregados.

### Comprobación de uso de Eloquent
Siguiendo con el ejemplo de un `Staff` que tenga el `run` y `document_number` ambos en `null`.
**Si uso DB Facade no hay errores:**
```bash
  Database\Seeders\StaffSeeder ....... RUNNING
  Database\Seeders\StaffSeeder .... 39 ms DONE
```

**Con Eloquent me arroja el error esperado, ya que si se hace uso del model `Staff`:**
```bash
Database\Seeders\StaffSeeder ....... RUNNING
Error al crear staff Junior Peterson: Debe ingresar al menos RUN o Document Number.
Database\Seeders\StaffSeeder .... 38 ms DONE
```
Aquí apropisito se puso los registro de run y documento en null (**se puso en null en el ejemplo de DB Facade igualmente**):
```json
'run' => null,
'document_number' => null,
```


## C09: Manejador de errores inteligente
*más info->* [Manejo de errores](https://documentacionlaravel.com/docs/11.x/errors)
```php
foreach ($staffMembers as $staff) {...}
```
Primero se recorre cada elemento del array `staffMembers`

```php
try {
    Staff::create($staff);
} catch (\Exception $e) {...}
```
- Ahora con `try` intenta crear el registro con `Staff::create()` (usando Eloquent)
- con el `catch`, si falla (por la validación y otro error), "**atrapa**" la excepción para ecitar que el seeder se detenga.
- Ejemplo práctico: Si el registro de "Junior Peterson" tiene `run` y `document_number` como **null**, el modelo lanzará una excepción, pero el seeder continuará con los siguientes registros.

```php
$this->command->error("Error al crear staff {$staff['names']}: {$e->getMessage()}");
```
Se muestra un mensaje de error en rojo en la terminal con:
- Nombre del staff fallido (`{$staff['names']}`)
- Motivo del error: `{$e->getMessage()}`
Salida por consola de esto:
```bash
Database\Seeders\StaffSeeder .... RUNNING
Error al crear staff Junior Peterson: Debe ingresar al menos RUN o Document Number.
```

Entonces es muy útil su uso por:
- **No se detiene ante errores**: Si un registro falla, el seeder continúa con los demás (en lugar de parar todo el proceso).
- **Dice exactamente qué falló**: Sabrás qué registro tiene problemas y por qué.
- **Es profesional**: Es la forma estándar de manejar errores en Laravel.

## C10: Evento de modelo Eloquent
```php
static::saving(function ($staff) {
    if (empty($staff->run) && empty($staff->document_number)) {
        throw new \Exception('Debe ingresar al menos RUN o Document Number.');
    }
});
```
Hace una **validación** que al menos uno de los campos run o document_number esté presente **antes de guardar en la BD <--**
Al ser un **Trigger**, se ejecuta **antes** de cualquier operación `save()` o `create()` en el modelo `Staff`.

##
##
##
##
##
##
##
