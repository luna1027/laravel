## Laravel 結構 ##
- app/
    - Console/
        - Commands/ #Laravel的命令檔案
        - Kernel.php #Laravel的排程
    - Http/
        - Controller/ #控制器
        - Middleware/ #中介層
    - Jobs/ #工作事項
- config/ #設定檔
- database/
    - migrations/ #資料庫相關migration檔案
- node_modules/ #專案套件的安裝目錄
- public/ #對外公開的目錄
- resources/
    - js/ #Js原始檔案所在目錄
    - lang/ #語系檔案所在目錄
    - sass/ #SASS/SCSS檔案所在目錄
    - views/ #前端模板所在目錄
- vendor/ #Composer套件安裝目錄
- .env #環境變數設定檔案
- composer.json #Composer套件安裝清單
- package.json #專案套件安裝清單

## Migration Function ##
up() : 要執行的動作
up() : 要執行的動作
> insteger : int 整數