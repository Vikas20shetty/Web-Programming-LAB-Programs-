import React, { useState } from 'react';

 function App() {
  const colors = ['red','blue','green','purple','orange','pink','brown'];
  const [index, setIndex] = useState(0);

  return (
    <div>
      <h1>Change Paragraph Color</h1>
      <p style={{ color: colors[index], fontSize: 20 }}>
        Click the button to change my color!
      </p>
      <button onClick={() => setIndex((i) => (i + 1) % colors.length)}>Change Color</button>
    </div>
  );
}
export default
