# parsing-XML-feed-google-shopping
Lo script legge il file XML di Google Shopping e restituisce in output il valore di alcuni attributi ed il contenuto di alcuni elementi testuali.

Eseguendo lo script otteniamo un output estratto dal file XML. Utilizzando la funzione simplexml_load_file carichiamo all’interno di un oggetto SimpleXML il contenuto di un file passato come argomento. L’argomento può essere sia un file che risiede sulla macchina locale come un file che risiede in remoto su un altro server.

Ho utilizzato questo script per stampare le immagini dei prodotti inclusi nel feed e verificare che rispettassero le norme di Google Shopping per evitarne la sospensione in fase di pubblicazione.
