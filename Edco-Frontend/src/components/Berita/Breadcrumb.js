import Breadcrumb from 'react-bootstrap/Breadcrumb';
import '../../style/Breadcrumb.css'

function BreadcrumbExample() {
  return (
    <Breadcrumb class="breadcrumb">
      <Breadcrumb.Item href="#">Dashboard</Breadcrumb.Item>
      <Breadcrumb.Item href="#">
        Berita
      </Breadcrumb.Item>
      <Breadcrumb.Item active>Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</Breadcrumb.Item>
    </Breadcrumb>
  );
}

export default BreadcrumbExample;