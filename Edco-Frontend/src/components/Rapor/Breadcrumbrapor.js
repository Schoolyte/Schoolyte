import Breadcrumb from 'react-bootstrap/Breadcrumb';
import '../../style/Breadcrumbrapor.css'

function BreadcrumbExample() {
  return (
    <Breadcrumb class="breadcrumbrapor">
      <Breadcrumb.Item href="#">Akademik</Breadcrumb.Item>
      <Breadcrumb.Item href="#">
        Rapor
      </Breadcrumb.Item>
      <Breadcrumb.Item active>Novi Rosidhatul Aulia</Breadcrumb.Item>
    </Breadcrumb>
  );
}

export default BreadcrumbExample;