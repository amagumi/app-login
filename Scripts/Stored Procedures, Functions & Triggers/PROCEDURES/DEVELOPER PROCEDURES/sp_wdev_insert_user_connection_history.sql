USE PP_DDBB;
go
CREATE OR ALTER PROCEDURE sp_wdev_insert_user_connection_history
    @USER_ID INT,
    @USERNAME NVARCHAR(25),
    @DATE_CONNECTED DATETIME,
    @DATE_DISCONNECTED DATETIME
AS
BEGIN
    SET NOCOUNT ON;
    
    INSERT INTO USER_CONNECTIONS_HISTORY (USER_ID, USERNAME, DATE_CONNECTED, DATE_DISCONNECTED)
    VALUES (@USER_ID, @USERNAME, @DATE_CONNECTED, @DATE_DISCONNECTED);
END
GO
