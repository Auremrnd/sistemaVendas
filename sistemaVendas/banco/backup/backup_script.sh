DB_USER= "postgre"
DB_NAME= "bancovendas"
BACKUP_DIR= "$HOME/backups"

# Nome do arquivo de backup
BACKUP_FILE= "$BACKUP_DIR/backup_$(date +'%Y%m%d_%H%M%S').sql"

# Comando para fazer o backup
pg_dump -U $DB_USER $DB_NAME > $BACKUP_FILE/backup_script.sh  