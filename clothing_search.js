// src/App.js
import React, { useState } from 'react';
import SearchBar from './components/SearchBar';
import products from './productsData';

const App = () => {
  const [searchResults, setSearchResults] = useState([]);
  
  const handleSearch = (query) => {
    // Filter products based on the search query
    const filteredProducts = products.filter((product) =>
      product.name.toLowerCase().includes(query.toLowerCase())
    );

    // Update the search results
    setSearchResults(filteredProducts);
  };

  return (
    <div>
      <h1>eCommerce Website</h1>
      <SearchBar onSearch={handleSearch} />
      <h2>Search Results</h2>
      <ul>
        {searchResults.map((product) => (
          <li key={product.id}>{product.name} - {product.category}</li>
        ))}
      </ul>
      {/* Render your product list or other components here */}
    </div>
  );
};

export default App;