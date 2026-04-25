-- ============================================================
--  DB Synchronizer — Esquema MySQL / MariaDB
--  Generado: 2026-04-22
-- ============================================================

-- ------------------------------------------------------------
--  TABLA: panel_users
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS panel_users (
    id            INT UNSIGNED     NOT NULL AUTO_INCREMENT,
    username      VARCHAR(60)      NOT NULL,
    password_hash VARCHAR(255)     NOT NULL,
    rol           ENUM('admin','cliente')
                                   NOT NULL DEFAULT 'cliente',

    PRIMARY KEY (id),
    UNIQUE KEY uq_panel_users_username (username)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Usuarios con acceso al panel de administración';


-- ------------------------------------------------------------
--  TABLA: database_credentials
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS database_credentials (
    id            INT UNSIGNED      NOT NULL AUTO_INCREMENT,
    alias         VARCHAR(80)       NOT NULL,
    db_type       ENUM('mysql','mariadb')
                                    NOT NULL DEFAULT 'mysql',
    host          VARCHAR(255)      NOT NULL,
    port          SMALLINT UNSIGNED NOT NULL DEFAULT 3306,
    database_name VARCHAR(64)       NOT NULL,
    db_user       VARCHAR(80)       NOT NULL,
    db_password   TEXT              NOT NULL,

    PRIMARY KEY (id),
    UNIQUE KEY uq_db_credentials_alias (alias)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Credenciales de bases de datos para sincronización';