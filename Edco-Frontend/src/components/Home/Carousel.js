import Carousel from 'react-bootstrap/Carousel';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import '../../style/Carousel.css'
import foto from '../../assets/mpls.png'

function UncontrolledExample() {
    return (
        <div id="carouselExampleControls" className="carousel carousel-dark slide d-inline d-sm-block" data-bs-ride="carousel" aria-hidden="true">
        <Carousel>
            <Carousel.Item >
                <div className="card-wrapper">
                    <div className="card">
                    <Card className="card">
                        <Card.Img variant="top" src={foto} className="mpls"/>
                        <Card.Body>
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                    <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls"/>
                        <Card.Body>
                       
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                    <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls"/>
                        <Card.Body>
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                   
                </div>
            </Carousel.Item>
            <Carousel.Item>
                <div className="card-wrapper">
                <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls" />
                        <Card.Body>
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                    <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls"/>
                        <Card.Body>
                       
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                    <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls" />
                        <Card.Body>
                      
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                </div>
            </Carousel.Item>
            <Carousel.Item>
                <div className="card-wrapper">
                <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls" />
                        <Card.Body>
                        
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                    <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls"/>
                        <Card.Body>
                      
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                    <div className="card">
                    <Card>
                        <Card.Img variant="top" src={foto} className="mpls" />
                        <Card.Body>
                          
                            <Card.Text className="text">
                            Pembukaan kegiatan
                            Masa Pengenalan
                            Lingkungan Sekolah
                            (MPLS)
                            </Card.Text>
                            <Button variant="primary" className="btn-12">Read More</Button>
                        </Card.Body>
                    </Card>
                    </div>
                </div>
            </Carousel.Item>
        </Carousel>
        </div>
    );
}

export default UncontrolledExample;