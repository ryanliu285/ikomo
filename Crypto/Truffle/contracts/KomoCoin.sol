pragma solidity ^0.4.17;

import 'zeppelin-solidity/contracts/token/ERC721/ERC721Token.sol';
import 'zeppelin-solidity/contracts/ownership/Ownable.sol';

contract KomoCoin is ERC721Token, Ownable {
  string public constant name = "KomoCoin";
  string public constant symbol = "KC";
}

struct Komo {
  string outer;
  string inner;
}

Komo[] public komos;

  function getKomo( uint _KomoId ) public view returns(string outer, string inner){
    Komo memory _kom = komos[_komoId];

    outer = _kom.outer;
    inner = _kom.inner;
  }

  function mint(string _outer, string _inner) public payable onlyOwner{
    Komo memory _komo = Komo({ outer: _outer, inner: _inner });
    uint _komoId = komos.push(_komo) - 1;

    _mint(msg.sender, _komoId);
  }
