from json import loads
from re import sub
from requests import get
from typing import Dict, Any


class Search:

    def __init__(self):
        super().__init__()
        self._url = 'https://viacep.com.br/ws'

    def get_address_by_zip_code(self, zip_code: str) -> Dict[str, Any]:
        # Removing anything that is not a number from zip code string
        zip_code = sub(r'/^[0-9]/im', '', zip_code)

        response = get(url=f'{self._url}/{zip_code}/json')

        # If response is 2XX sucess and is not 204 (no content) then return
        # json from response body.
        if response.status_code >= 200 and response.status_code <= 299 and response.status_code != 204:
            return response.json()
        else:
            return None


address = Search().get_address_by_zip_code('38410578')

for prop in address:
    print(f'{prop}: {address[prop]}')
